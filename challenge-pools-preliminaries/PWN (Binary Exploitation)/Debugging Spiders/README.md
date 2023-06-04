# Description
Your friend is a lazy developer who likes spiders a lot for some reasons. One day, he is making a new, refined app called new_spider. He brags about how this app is so sophisticated it can give you a flag by using one of its function. Sadly, it is yet to be implemented. CAn you, by force, make the program run the yet to be implemented function?  

Hint:
1. Check the manual page of readelf or objdump 
# Flag
FindITCTF{Ju57_7h3_W4y_1t_iz}
# Solver Description
We first need to find the address of the hidden function. If we are working with a local file, we can do readelf -s [program_name] | grep -i "FUNC" to filter the addresses of all the functions in the program, or we can make use of objdump -d command. 

![image](https://github.com/CTF-Find-IT-2023/challenge-pools-preliminaries/assets/114661943/a9f7a7ed-974d-4850-9dcb-07e4d34f42cd)

After we found the secret address, we can then bruteforce the program to see at what point the program crash. Or how many bytes does the gets function actually allow. There's a better way of approaching this, like using metasploit's pattern_create and pattern_offset to determine the length of the bytes, but good old fashion bruteforce will do.

![image](https://github.com/CTF-Find-IT-2023/challenge-pools-preliminaries/assets/114661943/d5753431-0a70-423f-89ad-0c358d5c36fe)

As you can see there, the gets function can only take 72 bytes of characters, the 73th byte starts to overflow the system, indicated by the "jumping to 0x00000041" message displayed on screen.  

Now, we just need to combine both of our knowledge of the secret address and the maximum bytes the gets function can take to take us to the secret function.

![image](https://github.com/CTF-Find-IT-2023/challenge-pools-preliminaries/assets/114661943/c23146f3-e86b-4744-ac77-164fe58967db)

# Score
200
# Author
Elin(tinygiant#8987)
