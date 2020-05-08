import cv2
import numpy as np
import glob
from PIL import Image
import sys
input = sys.argv[1]


def cartoon(img_rgb):
    
    numDownSamples = 2       # number of downscaling steps
    numBilateralFilters = 40  # number of bilateral filtering steps

    # minimizing and bluring using Gaussian pyramid
    img_color = img_rgb
    for _ in range(numDownSamples):
        img_color = cv2.pyrDown(img_color)
