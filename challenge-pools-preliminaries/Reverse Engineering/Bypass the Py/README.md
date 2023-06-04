# Bypass the Py

# Description
An adventurer found this when he fought the great beast named Python. It seems to be locked by something no locksmith has ever opened, wrapped by something that's called a "PyInstaller". Can you find a way to get around this?

# Flag
FindITCTF{t4ngl3D_w1tH_pyTh0n_4nd_5tuff}

# Solver Description
1. Dari soal bisa diketahui bahwa file exe merupakan hasil dari Pyinstaller. Jika dicari-cari, akan ada disasemmbler untuk file exe hasil Pyinstaller, yaitu pyinstxtractor.
2. Setelah itu akan menjadi python byte code (.pyc). Gunakan decompiler seperti pycdc.
3. Buka source codenya, flag akan terlihat dengan jelas.

# Score
400

# Author
Infinicus#6867