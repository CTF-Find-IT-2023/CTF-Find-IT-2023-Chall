#!/usr/bin/env python

from string import ascii_uppercase

key = '2373661'
encrypted = []

with open('plaintext.txt') as handle: 
	plaintext = handle.read()

	i = 0
	for c in plaintext:
		c = c.upper()

		if (c in ascii_uppercase):
			index = ascii_uppercase.index(c)
			shift = int(key[i % len(key)])
			enc_text = ascii_uppercase[(index + shift) % 26]
			encrypted.append(enc_text)
			i += 1

		else:
			encrypted.append(c)

print(''.join(encrypted))



