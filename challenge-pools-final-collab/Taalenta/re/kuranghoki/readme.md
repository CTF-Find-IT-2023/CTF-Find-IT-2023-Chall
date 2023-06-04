# Kurang Hoki

# Description
Panjul mengincar pendaftaran ke sebuah aplikasi yang menawarkan hadiah untuk pendaftar ke 1000. Sayangnya ia kelewatan. Bantu panjul mencari id pengunjung ke 1000.
format: FindITCTF{xxx-xxx-xxx-xxx}

# Flag
FindITCTF{7B9-A34-2F6-E1C}

# Solver Description
Flow Solver:

1. Unzip apk
2. Decompile libapp.so
3. Baca fungsi register dan pahami mekanisme pembuatan id
4. Reverse fungsi pembuatan id
5. Gunakan fungsi reverse kepada id saat ini untuk mendapatkan id pendaftar ke 1000

# Score
500

# Author
scriptshogun#8880

# Tags
Flutter, Reverse Engineer, Mobile
