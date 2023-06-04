#!/usr/bin/env python3

import random
from Crypto.Util.number import long_to_bytes as ltb, bytes_to_long as btl
from secret import flag as FLAG, secretP, secretQ
from math import gcd

class RsaAlgorithm:
    def __init__(self,):
        while True:
            p = secretP
            q = secretQ
            phi  = (p-1) * (q-1)
            e = 5
            if(gcd(phi, e)==1):
                self.n = p * q
                self.e = e
                self.d = pow(self.e, -1, phi)
                break
        self.padded = ltb(random.getrandbits(1024)).zfill(128)
    
    def pad(self, message):
        return self.padded + message

    def encrypt(self, plaintext):
        pad_data = btl(self.padded+plaintext) 
        enc = pow(pad_data, self.e, self.n)
        return ltb(enc)+self.padded

if __name__ == "__main__":
    assert len(FLAG) == 47
    algo = RsaAlgorithm()
    print("!Welcome to our application!")
    print("1. Try to Encrpyt")
    print("2. Get the Flag")
    print("3. Check Flag")
    print("4. Close")
    while True:
        choosen = input("Your choosen: ")
        if(choosen == '1'):
            msg = bytes.fromhex(input("Your message (IN HEX): "))
            ciphertext = algo.encrypt(msg)
            print("Your ciphertext is:", ciphertext.hex())
        elif(choosen == '2'):
            cipherFlag = algo.encrypt(FLAG)
            print("Your cipherFlag is:", cipherFlag.hex())
        elif(choosen == '3'):
            msg = bytes.fromhex(input("Flag (IN HEX): "))
            if msg == FLAG: print("Yeah you got the Flag, CongratSS!!")
            else: print("^^ Less disappointment, Thinking again ^^")
        elif(choosen == '4'): break
        else: print("Wrong input")

