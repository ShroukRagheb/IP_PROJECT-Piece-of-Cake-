import cv2
import numpy as np
import glob
from PIL import Image
import sys
input = sys.argv[1]


def edges(img_rgb):
    
    numDownSamples = 2       # number of downscaling steps
    numBilateralFilters = 40  # number of bilateral filtering steps

    # minimizing and bluring using Gaussian pyramid
    img_color = img_rgb
    for _ in range(numDownSamples):
        img_color = cv2.pyrDown(img_color)
    
    # reduce noise using Bilateral Filter
    for _ in range(numBilateralFilters):
        img_color = cv2.bilateralFilter(img_color, 9, 9, 7)
    
    # upsample image to original size
    for _ in range(numDownSamples):
        img_color = cv2.pyrUp(img_color)
   
    # convert to grayscale and apply median blur
    img_gray = cv2.cvtColor(img_rgb, cv2.COLOR_RGB2GRAY)
    img_blur = cv2.medianBlur(img_gray, 3)
    
    # detect and enhance edges
    img_edge = cv2.adaptiveThreshold(img_blur, 255,
                                     cv2.ADAPTIVE_THRESH_MEAN_C,
                                     cv2.THRESH_BINARY, 3, 2)

    # And between edge , rgb image 
    (x,y,z) = img_color.shape
    img_edge = cv2.resize(img_edge,(y,x)) 
    #img_edge = cv2.cvtColor(img_edge, cv2.COLOR_GRAY2RGB)
    #return cv2.bitwise_and(img_color, img_edge)
    img_edge = cv2.medianBlur(img_edge, 3)
    return img_edge

img_rgb = cv2.imread(input)
res = edges(img_rgb)
res = cv2.resize(res,(img_rgb.shape[1],img_rgb.shape[0]))
cv2.imwrite('C:/xampp/htdocs/output/output.jpg' , res)