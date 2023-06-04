# Description
Bob wants to enhance his own image. He uses an image enhancer that he got from his friend. His friend advised that besides making the image look good, this image enhancer also sends a message. But after Bob tried it, he found out that his friend pranked him and he got scammed by the image enhancer. However, he managed to get the source code from the image enhancer. Can you help bob to recover his picture and get a message from his friend? (Bracket the flag with FindITCTF{})

# Flag
FindITCTF{s0me_f1l3_r3c0v3ry_4nd_5t3g0_4ft3r_4ll}

# Solver Description
The image enhancer do steganography and corrupt the file. To solve it just reverse the process of corrupting file at the same time take some information that the image enhancer hiding. Then just decode the steganography process. Implementation: [solver.py](./solver.py)

# Score
400