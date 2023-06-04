# Incomplete Archives

# Description
A serial killer has been going around leaving USB sticks with the song by Alan Waker, The Spectre. I love this song, but it doesn't sound like what I used to hear on Youtube. Probably just my feeling. The stick also includes some kind of encrypted file. Gather some useful info from this USB stick.

# Flag
FindITCTF{tH3_Sp3Ct0gR4M_0f_AL4N_W4LK3R}

# Solver Description
1. Audio ketika dibuka akan berisi audio Alan Walker - The Spectre dengan modifikasi sehingga ada derau tidak jelas.
2. Pada desc diberikan pengertian bahwa lagu telah dimodifikasi, tidak seperti yang ada di Youtube. Sehingga, bisa diinvertkan dengan lagu original untuk mendapatkan modifikasinya.
3. Setelah dilihat pada spectogram hasil reverse, didapat tulisan secret key yang bisa digunakan untuk decrypt file.
4. Jika file encrypted dilihat, terdapat header "mkapak". Jika cari di Google "Mkapak encryption" maka akan ada github yang terarah pada kapak encryption.
5. Gunakan key yang didapat untuk decrypt.
6. Didapat sebuah rar file berisi gambar album "The Spectre" yang sama dari Wikipedia.
7. Substract difference dari gambar original dengan gambar yang sudah dimodifikasi untuk mendapatkan flag. Bisa menggunakan Photoshop dsb.

# Score
500

# Author
Infinicus#6867
