#image to matrix
from PIL import Image
import numpy as np

# the identity 3d tensor
aidi = np.zeros((225, 3, 3), dtype=np.uint8)
for i in range(0, 225):
    aidi[i] = np.identity(3)

# ar = np.matmul(ar, aidi)
# np.set_printoptions(threshold=sys.maxsize)
# print(ar)
# print(aidi)

#save matrix to image
dat = Image.fromarray(aidi)
dat.save('solve.png')
dat.show()