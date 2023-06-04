import binascii, cv2, struct, os

def hextobin(h):
    return bin(int(h, 16))[2:].zfill(len(h) * 4)

def add(file, something):
    index = 0
    r = ""
    g = ""
    b = ""
    image = cv2.imread(file)
    delimiter = b"#######"
    something+=delimiter
    something = something.hex()
    binary_string = hextobin(something[40:])
    for values in image:
        for pixel in values:
            r = hextobin(str(pixel[0]))
            g = hextobin(str(pixel[1]))
            b = hextobin(str(pixel[2]))
            if(index < len(binary_string)):
                pixel[0] = int(r[:-1] + binary_string[index], 2)
                index+=1
            if(index < len(binary_string)):
                pixel[1] = int(g[:-1] + binary_string[index], 2)
                index+=1
            if(index < len(binary_string)):
                pixel[2] = int(b[:-1] + binary_string[index], 2)
                index+=1
            if(index >= len(binary_string)):
                break
    return image

def enhancer(filename,something):
    something = something.hex()
    x = filename
    newfile=[]
    file = open(x,"rb").read()
    for i in range(0, len(file), 32):
        newfile.append(file[i:i+32])
    enhance = b''
    count = 0
    for i in reversed(range(len(newfile))):
        enhance += newfile[i]
        if(count < len(something)/2):
            enhance+=something[count:count+4].encode('utf-8')
            count+=4
    with open("enhancedfile","wb") as ff:
        ff.write(enhance)
        ff.close()
    os.remove(x)

print("Welcome to image enhancer! Wanna enhance ur image? Just give it to me!")
image = input("Choose the directory of ur image: ")
print("Processing ur image...")
secret = b"redacted"
cv2.imwrite("temp.png", add(image, secret))
enhancer("temp.png", secret)
print("Done! Clearing the work area...")
os.remove(image)
print("Here is ur image!")
print("Thank you for using our services!")
print("Your image is now enhanced!")
print("But only some people can see it :)")
print("Goodluck!")
