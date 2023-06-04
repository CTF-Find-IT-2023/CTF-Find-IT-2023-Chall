import cv2

def hextobin(h):
    return bin(int(h, 16))[2:].zfill(len(h) * 4)

print("Solving the png corrupted file...")

x = "./enhancedfile"
file = open(x,"rb").read()
newfile_dec=[]
flag_dec=[]
res_dec=[]
dehance = b''
count = 0
res_start = 0
newfile_dec.append(file[0:3])
flag_dec.append(file[3:7])
for i in range(7, len(file), 32):
    if(count<36):
        newfile_dec.append(file[i+count:i+32+count])
        flag_dec.append(file[i+32+count:i+36+count])
        count+=4
    else:
        newfile_dec.append(file[i+count:i+32+count])
flag = b""
for enc in flag_dec:
    flag+=enc
newfile_dec = newfile_dec[:-2]
for i in reversed(range(len(newfile_dec))):
    dehance += newfile_dec[i]
with open(x+".png","wb") as ff:
    ff.write(dehance)
    ff.close()

print("Solving steganography inside file...")

data = ""
image = cv2.imread("./enhancedfile.png")
r = ""
g = ""
b = ""
for values in image:
    for pixel in values:
        r = hextobin(str(pixel[0]))
        g = hextobin(str(pixel[1]))
        b = hextobin(str(pixel[2]))
        data += r[-1]
        data += g[-1]
        data += b[-1]
split_data = [data[i:i+8] for i in range(0, len(data), 8)]

delimiter = b"#######"
full_bin = ""
datum=""
limit = 0
for j in range(len(split_data)-1):
    datum=""
    for k in range(j, j+7):
        datum += split_data[k]
    if(datum == hextobin(delimiter.hex())):
        limit = j
        break

for i in range(0, limit):
    full_bin += split_data[i]

part2_flag = hex(int(full_bin, 2))[2:].encode('utf-8')
full_flag = flag+part2_flag
full_flag = full_flag.decode('utf-8')
print("Final flag: %s"%bytes.fromhex(full_flag).decode('utf-8'))
