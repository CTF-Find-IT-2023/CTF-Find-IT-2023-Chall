# Description
We have found a suspicious looking file from an old HDD discarded in the land fill. We suspect that it might belong to a lost hiker. Can this file tell us about their whereabaout? 

Notes:
The answer is case sensitive, capitalize the first letter of each word and separate them with an underscore, don't forget to wrap the answer in the format of FindITCTF{Your_Answer_Here}. 

Hints:
1. The file might need some repairing to do
2. If the file cannot be inspected visually, consider other information revolving around the file
# Flag
FindITCTF{Gunung_Tangkuban_Parahu}
# Solver Description
We are going to use a hex editor to inspect it, since it's going to tell us a lot about the file. For instance, its type. And it seems like the file is a jpeg with a broken header. We can do some repairing to it, by looking at the correct header from the Wikipedia page for file signature.
![image](https://user-images.githubusercontent.com/114661943/217005213-6688dd34-ccc3-4da2-a2ce-20cf848b5df0.png)
We can then do an exif analysis to the file since it's visually looking weird. Using exiftool, we get the coordinates of where the picture is taken.
![image](https://user-images.githubusercontent.com/114661943/217007952-f1c10d09-79e6-46c4-bf5c-0ec037a2259b.png)
From here, just head over to Google Maps or any other map services to look for the coordinates.
![image](https://user-images.githubusercontent.com/114661943/217008374-77960939-47b3-4bab-acea-0e0a72298b37.png)

# Score
200
# Author
Elin(tinygiant#8987)
