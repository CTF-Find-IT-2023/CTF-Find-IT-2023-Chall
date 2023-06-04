# Description
Bob writes cybersecurity articles on his website. There doesn't seem to be anything there, right? But there's something on that website.

# Flag
FindITCTF{ju5t_s0me_r36ul4R_w3b_3xplo1tat1on_r1ght?}

# Solver Description
Edit the request header add "Secret: True" then it will pop a cookie that had md5 false value. Edit that value to true value. It will direct us to another page. In this new page get the first b64 encoded flag in html comment. Get the second b64 encoded flag in response header. In that 2nd flag its also has a hint that we should do HTTP OPTIONS method to the page to get another part. After doing the HTTP OPTIONS method, get the 3rd part b64 encoded flag. In that part, also has a hint that we should do HTTP HEAD method to get the 4th part. Do the HTTP HEAD and get the 4th b64 encoded flag. Put all parts together and get the flag.

# Score
200