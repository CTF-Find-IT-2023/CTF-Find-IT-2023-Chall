# Top-Level Security

# Description
A bank vault has this state-of-the-art security technology on their program. Or so the owner said. He said the password is the key. Well, it always was, wasn't it?

# Flag
FindITCTF{L0W_L3v3L_S3cUr1Ty_1s_3a5y}

# Solver Description
1. Buka exe di IDA Pro atau dengan menggunakan command strings di Linux.
2. Akan muncul bagian di mana ada banyak string dengan FindITCTF{xxxxxxxxx}.
3. Di dekat situ, akan ada keluaran dari program seperti "Welcome to the Top-Level Security Program!" dsb.
4. Bisa dilihat bahwa setelah "Correct Password", flag yang muncul adalah FindITCTF{T0P_L3v3L_S3cUr1Ty_1s_3a5y}.
5. Tapi, itu bukan flag sebenarnya. Pada soal diberitahukan bahwa the password is the key, yang berarti kita juga harus mengetahui passwordnya. terdapat string yang cukup mencurigakan, yaitu "*OHUNL [OL l;u7l Z[YPUN [V l3u>l Z[YPUN [V NL[ [OL MSHNf" yang ternyata adalah passwordnya.
6. Dengan dCode Cipher Identifier, didapat bahwa string tersebut adalah ROT Cipher. Berisi "Change the 'T0P' string to 'L0W' string to get the flag!"

# Score
200

# Author
Infinicus#6867