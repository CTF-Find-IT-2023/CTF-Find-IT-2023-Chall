from pwn import *
from Crypto.Util.number import long_to_bytes as ltb, bytes_to_long as btl
from math import gcd
import random

io = process("./app.py")

def hx(x):
    ret = hex(x)[2:]
    if(len(ret)%2==1): return '0'+ret
    else: return ret

def getEnc(pl):
    io.recvuntil(b'Your choosen: ')
    io.sendline(b'1')
    io.recvuntil(b'Your message (IN HEX): ')
    io.sendline(hx(pl).encode())
    io.recvuntil(b'Your ciphertext is: ')
    retdata = int(io.recvline(),16)
    return retdata

def getFlag():
    io.recvuntil(b'Your choosen: ')
    io.sendline(b'2')
    io.recvuntil(b'Your cipherFlag is: ')
    retdata = int(io.recvline(),16)
    return retdata

def checkFlag(flag):
    io.recvuntil(b'Your choosen: ')
    io.sendline(b'3')
    io.recvuntil(b'Flag (IN HEX): ')
    io.sendline(flag.hex().encode())
    retdata = io.recvline()
    if(b'CongratSS' in retdata): return 1
    else: return 0
    
def getPad():
    retValue1 = getEnc(2)
    retValue2 = getEnc(3)
    padding1 = ltb(retValue1)[-128:]
    padding2 = ltb(retValue2)[-128:]
    assert padding1 == padding2
    return padding1

# Known Public Value
e = 5

# Getting padding value
padded = getPad()

# Searching for the N
N = 0
for _ in range(10):
    i = random.getrandbits(1024)
    pangkat = btl(padded + ltb(i)) ** e
    ndata = pangkat - btl(ltb(getEnc(i))[:-128])
    if( _ == 0): N = ndata
    else: N = gcd(N, ndata)

# checking N
check_number = random.getrandbits(1024)
enc_check_number = pow(btl(padded + ltb(check_number)), e, N)
assert btl(ltb(getEnc(check_number))[:-128]) == enc_check_number

# get CipherFlag and padding calculation
cipherFlag = btl(ltb(getFlag())[:-128])
msg_pad = btl(padded + b'\x00'*47)

# this parameter will use for coppersmith attack partial plaintext known
print(N)
print(cipherFlag)
print(msg_pad)
io.close()

