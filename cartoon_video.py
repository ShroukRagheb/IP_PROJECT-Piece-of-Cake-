import cv2
import shutil
from moviepy.editor import VideoFileClip, AudioFileClip
import moviepy.editor as mpe
import os
import numpy as np
import glob
from PIL import Image
import errno, stat
import time
import sys
input = sys.argv[1]
def handleRemoveReadonly(func, path, exc):
  excvalue = exc[1]
  if func in (os.rmdir, os.remove) and excvalue.errno == errno.EACCES:
      os.chmod(path, stat.S_IRWXU| stat.S_IRWXG| stat.S_IRWXO) # 0777
      func(path)
  else:
      raise
def cartoon(img_rgb):
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
                                     cv2.THRESH_BINARY, 9, 2)
    # And between edge , rgb image 
    (x,y,z) = img_color.shape
