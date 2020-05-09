import cv2
import numpy as np
import sys
input=sys.argv[1]

img = cv2.imread(input)
img_grey = cv2.imread(input, cv2.IMREAD_GRAYSCALE)

cv2.imwrite('C:/xampp/htdocs/output/output.jpg',img_grey)
