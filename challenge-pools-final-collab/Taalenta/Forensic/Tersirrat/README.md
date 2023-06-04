# Tersirrat

# Description

Findy has an annoying girlfriend. His girlfriend didn't like to be to the point and often gave Findy "codes" to him. One day, Findy received messages and pictures from his girlfriend which made him confused because he couldn't figure out the meaning of the messages, moreover the pictures couldn't be opened!. Help Findy find out what his girlfriend means!

# Flag

FindITCTF{1_L0v3_y0u_3K_F1nDy}

# Solver Description

4 step ini ditulis secara tersirat pada msg.txt

1. Cek Meta (encode flag1)
2. Perbaiki CHUNK (PNG, IHDR, IDAT, IEND)
3. Resize by hex menjadi 720x740 clue ada di gambarnya (kiri encode flag2, kanan pw zip)
4. Ekstrak dengan binwalk (isi flag3.zip dengan password dari gambar sebelumnya)

flag1 : FindITCTF{ | 666c616731203a2046696e6449544354467b

flag2 : 1_L0v3_y0 | ZmxhZzIgOiAxX0wwdjNfeTA=

flag3 : u_3K_F1nDy} | synt3 : h_3X_S1aQl}

pw: didufindit

# Score

300

# Author

AODreamer#6160
