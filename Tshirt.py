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
mask_white2=255-Black_Mask

# Reduce noise
mask_white2 = cv2.medianBlur(mask_white2, 15)

# Convert to gray and get threshold
gray = cv2.cvtColor(mask_white2,cv2.COLOR_BGR2GRAY)
thresh = cv2.threshold(gray, 0, 255, cv2.THRESH_BINARY + cv2.THRESH_OTSU)[1]

# Close contour
kernel = cv2.getStructuringElement(cv2.MORPH_RECT, (7,7))
mask_white2 = cv2.morphologyEx(thresh, cv2.MORPH_CLOSE, kernel, iterations=1)

# Find outer contour and fill with white
cnts = cv2.findContours(mask_white2, cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_SIMPLE)
cnts = cnts[0] if len(cnts) == 2 else cnts[1]
cv2.fillPoly(mask_white2, cnts, [255,255,255])

# Remove noise < min size by using connected component 
nb_components, output, stats, centroids = cv2.connectedComponentsWithStats(mask_white2)
sizes = stats[1:, -1]; nb_components = nb_components - 1
min_size =2000
mask_white = np.zeros((output.shape))
for i in range(0, nb_components):
    if sizes[i] >= min_size:
        mask_white[output == i + 1] = 255

# Invert white mask
Black_mask = 255 - mask_white

######## black+original
# Convert Black_mask to 3-D
W,L = Black_mask.shape
mask_black_3CH = np.empty((W, L, 3), dtype=np.uint8)
mask_black_3CH[:, :, 0] = Black_mask
mask_black_3CH[:, :, 1] = Black_mask
mask_black_3CH[:, :, 2] = Black_mask

# Person + black shirt
L3 = cv2.bitwise_and(mask_black_3CH,person)

######white+original
# Convert white_mask to 3-D
W,L = mask_white.shape
mask_white_3CH = np.empty((W, L, 3), dtype=np.uint8)
mask_white_3CH[:, :, 0] = mask_white
mask_white_3CH[:, :, 1] = mask_white
mask_white_3CH[:, :, 2] = mask_white

# Person + white shirt
dst3_wh = cv2.bitwise_or(mask_white_3CH,L3)

#######################################################################
# Get height ,width ,size and center of old shirt
white_mask =255 - mask_black_3CH
ret, thresh = cv2.threshold(white_mask, 240, 255, cv2.THRESH_BINARY)
white_mask= cv2.cvtColor(white_mask, cv2.COLOR_RGB2GRAY)
nb_components, output, stats, centroids = cv2.connectedComponentsWithStats(white_mask)

sizes = stats[1:, -1]; nb_components = nb_components - 1
size_old = 0
i_old = 0

for i in range(0, nb_components):
    if sizes[i] >= size_old:
      i_old = i
      size_old = sizes[i]
      
width_old = stats[i_old+1, cv2.CC_STAT_WIDTH]
height_old = stats[i_old+1, cv2.CC_STAT_HEIGHT]
center_old = centroids[i_old + 1]
#######################################################################

# Load the new shirt
design = cv2.imread(input2)
design = cv2.resize(design,(mask_white.shape[1],mask_white.shape[0]))

# Threshold to convert new shirt to black color 
(T, thresh2) = cv2.threshold(design, 195, 255, cv2.THRESH_BINARY)

# Convert new shirt to white color 
Invdesign=255-thresh2

########################################################################
# Get height,width and center of new shirt
# Convert Invdesign from RGB to Gray
design2= cv2.cvtColor(Invdesign, cv2.COLOR_RGB2GRAY)
nb_components, output, stats, centroids = cv2.connectedComponentsWithStats(design2)
sizes = stats[1:, -1]; nb_components = nb_components - 1
size_new = 0
i_new = 0
design_new = np.zeros((output.shape))
for i in range(0, nb_components):
    if sizes[i] >= size_new:
      size_new = sizes[i]
      i_new = i

width_new = stats[i_new+1, cv2.CC_STAT_WIDTH]
height_new = stats[i_new+1, cv2.CC_STAT_HEIGHT]
center_new = centroids[i_new + 1]
design_new[output == i_new + 1] = 255
#########################################################################

# Load white image.We use it to change the center, width and height of new shirt to be equal to old shirt
img_02 = cv2.imread("white_back.jpg")

#########################################################################
# change the center and width of new shirt to be equal to old shirt
while (width_new-width_old > 20):
  center_x = center_old[0] - center_new[0] 
  diff_x = width_new - width_old
  diff = diff_x - abs(center_x)
  if center_x > 0:
    if diff > 0 :
      if (abs(center_x) >= 1):
        img_02_h=cv2.resize(img_02,(int(abs(center_x)),design.shape[0]))
        design = cv2.hconcat([img_02_h, design])
      if (diff >= 2):
        img_03_h=cv2.resize(img_02,(int((diff)/2),design.shape[0]))
        design = cv2.hconcat([img_03_h , design])
        design = cv2.hconcat([design , img_03_h])
    else:
      if (diff_x >= 1):
        img_02_h=cv2.resize(img_02,(int(diff_x),design.shape[0]))
        design = cv2.hconcat([img_02_h, design])
  else:
    if diff > 0 :
      if (abs(center_x) >= 1):
        img_02_h=cv2.resize(img_02,(int(abs(center_x)),design.shape[0]))
        design = cv2.hconcat([design, img_02_h])
      if (diff >= 2):
        img_03_h=cv2.resize(img_02,(int((diff)/2),design.shape[0]))
        design = cv2.hconcat([img_03_h , design])
        design = cv2.hconcat([design , img_03_h])
    else :
      if (diff_x >= 1):
        img_02_h=cv2.resize(img_02,(int(diff_x),design.shape[0]))
        design = cv2.hconcat([design, img_02_h])
  design = cv2.resize(design,(mask_white.shape[1],mask_white.shape[0]))
  (T, thresh2) = cv2.threshold(design, 195, 255, cv2.THRESH_BINARY)
  # Convert new shirt to white color 
  Invdesign=255-thresh2
  # Convert Invdesign from RGB to Gray
  design2= cv2.cvtColor(Invdesign, cv2.COLOR_RGB2GRAY)
  # Get height,width and center of new shirt
  nb_components, output, stats, centroids = cv2.connectedComponentsWithStats(design2)
  sizes = stats[1:, -1]; nb_components = nb_components - 1
  size_new = 0
  i_new = 0
  design_new = np.zeros((output.shape))
  for i in range(0, nb_components):
      if sizes[i] >= size_new:
        size_new = sizes[i]
        i_new = i
  width_new = stats[i_new+1, cv2.CC_STAT_WIDTH]
  height_new = stats[i_new+1, cv2.CC_STAT_HEIGHT]
  center_new = centroids[i_new + 1]
  design_new[output == i_new + 1] = 255
#########################################################################
#########################################################################
# change the center and height of new shirt to be equal to old shirt
height_old = height_old + 10
center_old[1] = center_old[1] + 5
while (height_new-height_old>2):
  center_y = center_old[1] - center_new[1] 
  diff_y = height_new - height_old
  diff = diff_y - abs(center_y)
  if center_y > 0:
    if diff > 0 :
      if (abs(center_y) >= 1):
        img_02_v=cv2.resize(img_02,(design.shape[1],int(abs(center_y))))
        design = cv2.vconcat([img_02_v,design])
      if (diff >= 2):
        img_03_v=cv2.resize(img_02,(design.shape[1],int((diff)/2)))
        design = cv2.vconcat([img_03_v , design])
        design = cv2.vconcat([design , img_03_v])
    else:
      if (diff_y >= 1):
        img_02_v=cv2.resize(img_02,(design.shape[1],int(diff_y)))
        design = cv2.vconcat([img_02_v,design])
  else:
    if diff > 0 :
      if (abs(center_y) >= 1):
        img_02_v=cv2.resize(img_02,(design.shape[1],int(abs(center_y))))
        design = cv2.vconcat([design ,img_02_v])
      if (diff >=2):
        img_03_v=cv2.resize(img_02,(design.shape[1],int((diff)/2)))
        design = cv2.vconcat([img_03_v , design])
        design = cv2.vconcat([design , img_03_v])
    else :
      if (diff_y >= 1):
        img_02_v=cv2.resize(img_02,(design.shape[1],int(diff_y)))
        design = cv2.vconcat([design ,img_02_v])
  design = cv2.resize(design,(mask_white.shape[1],mask_white.shape[0]))
  (T, thresh2) = cv2.threshold(design, 195, 255, cv2.THRESH_BINARY)
  # Convert new shirt to white color 
  Invdesign=255-thresh2
  # Convert Invdesign from RGB to Gray
  design2= cv2.cvtColor(Invdesign, cv2.COLOR_RGB2GRAY)
  # Get height,width and center of new shirt
  nb_components, output, stats, centroids = cv2.connectedComponentsWithStats(design2)
  sizes = stats[1:, -1]; nb_components = nb_components - 1
  size_new = 0
  i_new = 0
  design_new = np.zeros((output.shape))
  for i in range(0, nb_components):
      if sizes[i] >= size_new:
        size_new = sizes[i]
        i_new = i
  width_new = stats[i_new+1, cv2.CC_STAT_WIDTH]
  height_new = stats[i_new+1, cv2.CC_STAT_HEIGHT]
  center_new = centroids[i_new + 1]
  design_new[output == i_new + 1] = 255
###################################################################
# Resize design to be equal to mask size 
design = cv2.resize(design,(mask_white.shape[1],mask_white.shape[0]))
# design + black mask --> new shirt 
design_mask_mixed = cv2.bitwise_or(mask_black_3CH,design)
# person with new shirt
final_mask_black_3CH = cv2.bitwise_and(design_mask_mixed,dst3_wh)
cv2.imwrite('C:/xampp/htdocs/output/output.jpg',final_mask_black_3CH) 
os.remove('4.jpg')
