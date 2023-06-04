# Garis Start

Difficulty: Medium
Status: Not started
Tags: Web

# Web_Garis-Start_Medium

Author: Ismail Hakim - twang#7040

Deskripsi singkat: Marathon runner? silahkan daftar lewat web ini. Tapii… setelah webnya ready ya!: 

# Untuk Panitia

FindITCTF{NO_3ntries_N0_w0rr135}

Deployment steps:

```python
cd web_garis-start
docker-compose up
```

Solving steps:

1. Inspect element pada landing page untuk mendapatkan informasi yang dibutuhkan.
2. Melakukan directory fuzzing untuk menebak halaman login page
3. Melakukan fuzzing terhadap http header `X-Forwarded-For` dari IP 192.168.100.0 - 192.168.100.255, lihat manakah IP yang akan menghasilkan sebuah login page
4. SQL Injection pada form login yang tersembunyi, namun di sana memang tidak ada entry SQL table rownya. Flag akan didapatkan apabila login return something. 
5. Ditambahkan entry table sendiri dengan menggunakan `email=admin@admin.com&pass=admin' UNION SELECT 'admin', 'admin';#

# Untuk Peserta

Nama Problem:

Deskripsi singkat: Marathon runner? silahkan daftar lewat web ini. Tapii… setelah webnya ready ya!

Hint (jika perlu):