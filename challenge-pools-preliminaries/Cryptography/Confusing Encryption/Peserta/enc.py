import random

def random_N(n):
    range_start = 10**(n-1)
    range_end = (10**n)-1
    return random.randint(range_start, range_end)

def random_hex(n):
    a = random.randint(random_N(1), random_N(6))
    random.seed(a)
    range_start = 16**(n-1)
    range_end = (16**n)-1
    return random.randint(range_start, range_end)

FLAG = b'FindITCTF{redacted}'
FLAG = FLAG.hex()
KEY = random_hex(len(FLAG))

cipher = str(hex(int(FLAG, 16)^KEY))[2:]

print("Cipher: %s"%cipher)

with open('encrypted.txt', 'w') as f:
    f.write(cipher)