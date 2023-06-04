import random
from Cryptodome.Util.number import getPrime

with open('flag.txt', 'r') as f:
    flag = f.read()

randSeed = getPrime(13)
random.seed(randSeed)

encrypted = ''.join(f'{(ord(i) ^ random.randint(0, 255)):02x}' for i in flag)

with open('out.txt', 'w') as f:
    f.write(encrypted)