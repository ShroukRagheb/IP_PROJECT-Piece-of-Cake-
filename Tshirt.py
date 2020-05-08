import cv2
import numpy as np
import matplotlib.pyplot as plt
import matplotlib.image as mpimg
from PIL import Image
from numpy.matlib import zeros
import sys

input1 = sys.argv[1]
input2 = sys.argv[2]

# Read first input image
person = cv2.imread(input1)

# Upper and lower range for skin color
lower_skin = np.array([0, 10 , 60], dtype = "uint8")
upper_skin = np.array([20, 150, 255], dtype = "uint8")

# Copy person image 
frame = person.copy()

# Convert from BGR to HSV
HSV_image = cv2.cvtColor(frame, cv2.COLOR_BGR2HSV)

# Skin Mask 
skinMask = cv2.inRange(HSV_image, lower_skin, upper_skin)

# Closing open area in Skin mask
kernel = cv2.getStructuringElement(cv2.MORPH_ELLIPSE, (6, 6))
skinMask = cv2.morphologyEx(skinMask, cv2.MORPH_CLOSE, kernel)

# Convert skin mask from 2-D to 3-D
W,L = skinMask.shape
skinMask3 = np.empty((W, L, 3), dtype=np.uint8)
skinMask3[:, :, 0] = skinMask
skinMask3[:, :, 1] = skinMask
skinMask3[:, :, 2] = skinMask
skinMask = skinMask3

# Crop the pants 
for i in range(skinMask.shape[0]): 
    for j in range(skinMask.shape[1]):
      if (skinMask[i,j] != (0,0,0)).all():
        i2 = i
        j2 = j

for i in range(int(i2-skinMask.shape[0]/12),skinMask.shape[0]): 
    for j in range(skinMask.shape[1]):
      skinMask[i,j] = (255,255,255)

#Crop head
skinMask2= cv2.cvtColor(skinMask, cv2.COLOR_RGB2GRAY)
nb_components, output, stats, centroids = cv2.connectedComponentsWithStats(skinMask2)
sizes = stats[1:, -1]; nb_components = nb_components - 1
head = np.zeros((output.shape))
max_x=100000000
index=0
for i in range(0, nb_components):
    if centroids[i + 1][1]<max_x and sizes[i] > 3000:
      max_x=centroids[i + 1][1]
      index=i

head[output == index + 1] = 255

for i in range(head.shape[0]): 
    for j in range(head.shape[1]):
      if (head[i,j] == 255):
        i2 = i
        j2 = j

for i in range(0,int(i2-skinMask.shape[0]/12)): 
    for j in range(skinMask.shape[1]):
      skinMask[i,j] = (255,255,255)

# Invert skin mask
skinMask = 255 - skinMask
cv2.imwrite('4.jpg',skinMask)
Black_Mask = cv2.imread('4.jpg')

#Get the tshirt only in black color
flag =0
for i in range(Black_Mask.shape[0]): # for every pixel:
    for j in range(Black_Mask.shape[1]):
      if ((person[i,j,0] != (255) and person[i,j,1] != (255) and person[i,j,2] != (255))):
        if ((Black_Mask[i,j,0] != (0) and Black_Mask[i,j,1] != (0) and Black_Mask[i,j,2] != (0))) :
          Black_Mask[i,j] = person[i,j]
          flag = 1

      if ((Black_Mask[i,j,0] == (0) and Black_Mask[i,j,1] == (0) and Black_Mask[i,j,2] == (0))) :
          Black_Mask[i,j] = (255,255,255)  
      flag =0

for i in range(Black_Mask.shape[0]): # for every pixel:
    for j in range(Black_Mask.shape[1]):
      if ((Black_Mask[i,j,0] != (255) and Black_Mask[i,j,1] != (255) and Black_Mask[i,j,2] != (255))):
        Black_Mask[i,j,0] = (0)
        Black_Mask[i,j,1] = (0)
        Black_Mask[i,j,2] = (0)

# Invert the  shirt to white
