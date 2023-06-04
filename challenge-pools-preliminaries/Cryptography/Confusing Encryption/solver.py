import random

with open('encrypted.txt', 'r') as f:
    cipher = f.readline()

print("Ciphertext: %s"%cipher)

known_FLAG = b"FindITCTF{"
known = known_FLAG.hex()
len_known = len(str(known))
print("Known Flag: %s" % known)
print("Length Known Flag: %s" %len_known)
print("Cipher with length equal to length flag: %s" %cipher[0:len_known])
leak = str(hex(int(cipher[0:len_known], 16)^int(known, 16)))[2:]
print("Leaked key part: %s"%leak)

def randomNdec(n, seed):
    random.seed(seed)
    range_start = 16**(n-1)
    range_end = (16**n)-1
    return random.randint(range_start, range_end)

# Print iterations progress
def printProgressBar (iteration, total, prefix = '', suffix = '', decimals = 1, length = 100, fill = '█', printEnd = "\r"):
    """
    Call in a loop to create terminal progress bar
    @params:
        iteration   - Required  : current iteration (Int)
        total       - Required  : total iterations (Int)
        prefix      - Optional  : prefix string (Str)
        suffix      - Optional  : suffix string (Str)
        decimals    - Optional  : positive number of decimals in percent complete (Int)
        length      - Optional  : character length of bar (Int)
        fill        - Optional  : bar fill character (Str)
        printEnd    - Optional  : end character (e.g. "\r", "\r\n") (Str)
    """
    percent = ("{0:." + str(decimals) + "f}").format(100 * (iteration / float(total)))
    filledLength = int(length * iteration // total)
    bar = fill * filledLength + '-' * (length - filledLength)
    print(f'\r{prefix} |{bar}| {percent}% {suffix}', end = printEnd)
    # Print New Line on Complete
    if iteration == total: 
        print()

seed = 0
for i in range(999999):
  printProgressBar(i,999999)
  res_rand = str(hex(randomNdec(len(cipher), i)))[2:]
  if(res_rand[0:len_known] == leak):
      print("\nSeed found! Exiting...")
      seed = i
      print("Seed = %s"%i)
      break

key_dec = str(hex(randomNdec(len(cipher), seed)))[2:]
decoded = str(hex(int(cipher, 16)^int(key_dec,16)))[2:]
print("Leaked full key: %s"%key_dec)
print("Flag hex: %s"%decoded)
print("Flag recovered: %s"%bytes.fromhex(decoded).decode('utf-8'))