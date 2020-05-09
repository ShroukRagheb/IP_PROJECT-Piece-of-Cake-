
import matplotlib.pyplot as plt
import matplotlib.image as mpimg
from PIL import Image
import sys

input4 = sys.argv[1]
input1=sys.argv[2]
input2=sys.argv[3]
input3=sys.argv[4]

# Convert from hexa to rgb
h = input2.lstrip('#')
lower_range=tuple(int(h[i:i+2], 16) for i in (0, 2, 4))

h = input1.lstrip('#')
upper_range=tuple(int(h[i:i+2], 16) for i in (0, 2, 4))

h = input3.lstrip('#')
new=tuple(int(h[i:i+2], 16) for i in (0, 2, 4))
#load image
img = mpimg.imread(input4)
img2 = img.copy()
# for every pixel: change color for each pixel has intensity higher than lower range and lower than upper range.
for i in range(img.shape[0]):
  for j in range(img.shape[1]):
      if ((img[i,j,0] >= lower_range[0] and img[i,j,1]>= lower_range[1] and img[i,j,2] >= lower_range[2] and img[i,j,0]<=upper_range[0] and img[i,j,1]<=upper_range[1] and img[i,j,2] <= upper_range[2])):
        img2[i,j,0]=new[0]
        img2[i,j,1]=new[1]
        img2[i,j,2]=new[2]


mpimg.imsave('C:/xampp/htdocs/output/output.jpg', img2)
