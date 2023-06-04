# Joy Sketching in the Matrix

# Description
Joy is a big fan of the Matrix. She has this DVD which contains hidden easter eggs from the actors of the Matrix, especially the 8x16 version. Can you find out the easter egg?

Note: Format flag adalah FindITCTF{string} dengan kapitalisasi sesuai seperti petunjuk

# Flag
FindITCTF{etch_the_joysketch_in_the_matrix_zwquomf}

# Solver Description
1. File info berisi kode arduino yang berisi hex. File cmd.txt berisi perintah yang teridri dari u - up, l - left, r - right, d - down.
2. Decode file info untuk mendapatkan kode arduino. Dapat dilihat pada include arduino terdapat MD_MAX72xx.h dan ketika dicari-cari, library tersebut adalah untuk matrix LED. Pada file terdapat hint bahwa sistem bisa disimulasikan di Wokwi dengan spesifikasi yang tertulis. Apabila diperhatikan dengan lebih seksama, ada sebuah example project yang berhubungan dengan sketch, project tersebut adalah kode yang ada pada project "etch-a-sketch" by urish di Wokwi. 
3. Ubah program agar menerima input melalui serial monitor dan menganggap bahwa u = up joystick dan seterusnya.
4. Masukkan strings yang ada di cmd.txt ke dalam program untuk mendapatkan huruf untuk flag

# Score
400

# Author
Infinicus#6867