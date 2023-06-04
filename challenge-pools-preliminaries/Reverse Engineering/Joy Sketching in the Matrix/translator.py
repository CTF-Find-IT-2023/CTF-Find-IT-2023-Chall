# Function to substitute a string of characters with a string of moves
# A = uuuuuuurrrrrrddddddduuuulllll
# b = rrrruuulllluuuudddddd
# c = uuuuuuurrrrrllllldddddddrrrrr
# d = uuuurrrrddddlllrrruuuuuuu
# e = uuuuuuurrrrlllldddrrrrllllddddrrrr
# f = uuuuuuurrrrlllldddrrrrllll
# g = rrrruuullllddduuuuuuurrrr
# h = uuuuuuuddddrrrruuuuddddddd
# i = uuuuuuu
# j = uuddrrrruuuuuuu
# k = uuuuuuuddddrrurudlddrdd
# l = rrrrlllluuuuuuu
# m = uuuuuuurrrrdddduuuurrrrddddddd
# n = uuuuuuurrdrdrdrdrdrdrdrdruuuuuuu
# o = uuuuuuurrrrrrrdddddddlllllll
# p = uuuuuuurrrrddddllll
# q = uuuuuuurrrrrrrdddddddulluludrdrrdrrrllllllllll
# r = uuuuuuurrrrrdddlllllrdrdrdrdr
# s = rrrrruuullllluuuurrrrr
# t = rrrrrllllluuuuurrrllluu
# u = uuuuuuudddddddrrrrruuuuuuu
# v = rrrrrrrulululululululrdrdrdrdrdrdrurururururur
# w = uuuuuuudddddddrrrruuuuddddrrrruuuuuuu
# x = rurururururururldldldldululululrdrdrdrdrdrdrdr
# y = rrrrruuuuuuuddddlllluuuu
# z = rrrrrrrlllllllrururururururulllllll
# _ = rrrrrr

def translate(string):
    moves = ""
    for char in string:
        if char == "a":
            moves += "uuuuuuurrrrrrddddddduuuulllll"
        elif char == "b":
            moves += "rrrruuulllluuuudddddd"
        elif char == "c":
            moves += "uuuuuuurrrrrllllldddddddrrrrr"
        elif char == "d":
            moves += "uuuurrrrddddlllrrruuuuuuu"
        elif char == "e":
            moves += "uuuuuuurrrrlllldddrrrrllllddddrrrr"
        elif char == "f":
            moves += "uuuuuuurrrrlllldddrrrrllll"
        elif char == "g":
            moves += "rrrruuullllddduuuuuuurrrr"
        elif char == "h":
            moves += "uuuuuuuddddrrrruuuuddddddd"
        elif char == "i":
            moves += "uuuuuuu"
        elif char == "j":
            moves += "uuddrrrruuuuuuu"
        elif char == "k":
            moves += "uuuuuuuddddrrurudlddrdd"
        elif char == "l":
            moves += "rrrrlllluuuuuuu"
        elif char == "m":
            moves += "uuuuuuurrrrdddduuuurrrrddddddd"
        elif char == "n":
            moves += "uuuuuuurrdrdrdrdrdrdrdrdruuuuuuu"
        elif char == "o":
            moves += "uuuuuuurrrrrrrdddddddlllllll"
        elif char == "p":
            moves += "uuuuuuurrrrddddllll"
        elif char == "q":
            moves += "uuuuuuurrrrrrrdddddddulluludrdrrdrrrllllllllll"
        elif char == "r":
            moves += "uuuuuuurrrrrdddlllllrdrdrdrdr"
        elif char == "s":
            moves += "rrrrruuullllluuuurrrrr"
        elif char == "t":
            moves += "rrrrrllllluuuuurrrllluu"
        elif char == "u":
            moves += "uuuuuuudddddddrrrrruuuuuuu"
        elif char == "v":
            moves += "rrrrrrrulululululululrdrdrdrdrdrdrurururururur"
        elif char == "w":
            moves += "uuuuuuudddddddrrrruuuuddddrrrruuuuuuu"
        elif char == "x":
            moves += "rurururururururldldldldululululrdrdrdrdrdrdrdr"
        elif char == "y":
            moves += "rrrrruuuuuuuddddlllluuuu"
        elif char == "z":
            moves += "rrrrrrrlllllllrururururururulllllll"
        elif char == "_":
            moves += "rrrrrr"
        else:
            print("Invalid character")
            return ""
        #add a space between each character
        moves += "\n"
    return moves

# Path: main.py
# Main function to run the program
# Takes in a string of characters and outputs a string of moves
def main():
    string = "etch_the_joysketch_in_the_matrix_zwquomf"
    moves = translate(string)
    print(moves)

main()
