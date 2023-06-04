#image to matrix
from PIL import Image
import os
import sys
import numpy as np

dirUrIm = os.getcwd() + "/files/" + sys.argv[1]

SecIm = Image.open(os.getcwd() + "/flag.jpg")

UrIm = Image.open(dirUrIm)
SecAr = np.array(SecIm)

UrAr = np.array(UrIm)

UrAr = UrAr[:100, :3, :3]

ResAr = np.matmul(SecIm, UrAr)

#save matrix to image
dat = Image.fromarray(ResAr)
dat.save('res.jpg')
