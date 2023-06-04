# Description
In late 2015, me and my friends listens to a lot of NCS (NoCopyrightSounds). Anyways, lately we find that a lot of ways to hide an information is a little bit boring. So I made this cipher method using NCS music. Well, it may be easy to break and figure out the hidden message, but atleast it's fun to listen to right?

# Flag
FindITCTF{m3Morie5_UnL0cKEd}

# Solver Description
challenge.py suggests that the music file was generated based on the contents of an unprovided redacted flag, and choosing .mp3 files from the downloaded .json. Thus, download the .json and .mp3 files, and match each 5-second segment against the downloaded files to see which songs are included. Then, match the vidId of each song to then converting the seqId to char and then they can get the flag. Players can match the tracks manually if they want to; it's also possible to use tools like [dejavu](https://github.com/worldveil/dejavu) for automation.

# Score
500

# Author
Arif ('saj#6550)
