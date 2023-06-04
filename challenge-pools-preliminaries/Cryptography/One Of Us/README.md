# Description
Hi, you're a cryptography nerd, right? Long story short, I want to join this C00L KIDZ KLUB but in order to get in, I need to encode the phrase "HAPPY SWEET SEVENTEEN FREDDIE" with this tool they lend me? I don't get it! They also gave me a text file as a clue? I don't even know what these jumbled words are talking about!

Notes:
Answer is in all capital letters, but don't forget the usual format of FindITCTF{I_AM_INSIDE_YOUR_WALLS}

Hint:
1. The alphabet index starts from 0 all the way to 25
# Flag
FindITCTF{JDWSE_YXGHA_VKBFPWLHT_LSGGKLK}
# Solver Description
By inspecting the encoder script, we can conclude that the cipher used is a polyalphabetic subtitution. One of the famous example is the vigenere cipher. Given a long enough encrypted message, we can use online tools to do a frequency analysis and determine the probable keys used for the vigenere cipher. 
![image](https://user-images.githubusercontent.com/114661943/217154751-9e3173b6-1ec1-49ef-a571-beb59eff9302.png)
But when we take a look at the python script used for encoding or with the help of the hint, the key used isn't an english word but rather an array of numbers. More specifically an array of numbers consisting of the key's alphabet index (b corresponds to 1, d corresponds to 3, etc).
![image](https://user-images.githubusercontent.com/114661943/217155371-8de1baac-57ba-4c61-84e1-073da09e4767.png)
After figuring out the new encoding key and fixing the encoder tool (or we can skip this part and use the new key with an online encoder, whichever works better), we can then encode "HAPPY SWEET SEVENTEEN FREDDIE" to get the flag
![image](https://user-images.githubusercontent.com/114661943/217155647-3fb643ba-075e-4b3e-98d3-9a9999722dc9.png)
# Score
200
# Author
Elin(tinygiant#8987)
