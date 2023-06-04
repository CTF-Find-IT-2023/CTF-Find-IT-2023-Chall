# Description
The "Everything Machine" is a volumetric printer that had the ability to copy and print any three dimensional object. Can you, by force, make it print out a flag? Maybe overflow it with something?
# Flag
FindITCTF{D1v1s10n$_1z_th3_b3st_4LBUM}
# Solver Description
This is a simple buffer overflow exploit. The Everything Machine is written using the vulnerable gets() function that can be used to change the value of "credits" to exceed the requirement and therefore, gaining the user access to said flag.
The user starts with the default credit of 0x0010, while some prompts pump up the credits to a certain amount, it never reaches the needed credits of 0x3030. But with some buffer overflowing, we can force the initial value to change from the default 0x0010 to whatever we want, 0x4141 for example if we just bombard the magical printer with a bunch of A's.
![image](https://user-images.githubusercontent.com/114661943/216905945-c98323e1-9f0b-4317-b7a6-777e702e60c7.png)
# Score
200
# Author
Elin(tinygiant#8987)
