# Description
A Ngawi Spy was arrested in Lempuyangan Railway Station while eating a bread. He was arrested becuse he wanted to deliver an encrypted secret message to another spy. It was known that the message is encrypted by bitwise operating the message with decimal digits of Pi. Can you decrypt the secret message?

Hint:
- How many bitwise operation do you know?
- Pi has unending decimal digits...

# Flag
FindITCTF{s3b4IKnY4_j4n9An_T3rl4lU_9Eg4B4h}

# Solver Description
From the problem we know that the message is encrypted using bitwise operation between the message and the decimal digits of Pi. So to solve this problem:<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Determine how long is the secret message to get the numbers of the decimal digits. <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Bitwise-operate the message with the decimal digits. In this case the bitwise operation that is used is XOR. The implementation is in [return_flag.cpp](./return_flag.cpp) <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Convert the decrypted (XORed) message into ASCII. <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Read the message, get the flag. <br/>

You can use online tools such as text splitter, etc., if neccessary.

# Score
200
