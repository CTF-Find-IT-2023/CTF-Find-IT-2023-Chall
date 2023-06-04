# Description
Hey, I heard you can do OSINT? Well, I have a challenge for you. Guess my favorite song, in May of 2019! Take a look: https://open.spotify.com/user/31xz343hzapehdt4kvwwnlrh2qru

Notes: Place your answer in the format of FindITCTF{Artist_Name_Song_Title}. If there are multiple artists, credit the FIRST artist according to Spotify.
# Flag
FindITCTF{Illenium_Good_Things_Fall_Apart}
# Solver Description
We can simply look at the user's Spotify page and look for a playlist that contains their favorite songs in 2019. There are 8 identical playlists, though it might not seem obvious at first, the "Favorites of [YEAR]" playlists have something in common. Looking at the description of each playlist might help. Eventually, we figure out that the "Favorites of [YEAR]" playlists have the year mentioned in the description, and that the songs are represented monthly, meaning the order of the song matches the month of the year (first song in the playlist is the favorite song in January [YEAR])
![image](https://user-images.githubusercontent.com/114661943/217184771-d4cf2521-46cf-40a0-afa7-2d7de0800021.png)
# Score
150
# Author
Elin(tinygiant#8987)
