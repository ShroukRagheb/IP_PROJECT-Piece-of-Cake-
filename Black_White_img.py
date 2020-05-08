import cv2
import numpy as np
from PIL import Image
import glob
import sys

input = sys.argv[1]

#Network input size
W_in = 224
H_in = 224


# Create network graph(structure) and load weights(model)
net = cv2.dnn.readNetFromCaffe('C:/Users/abdullah/Desktop/IP_project/colorization_deploy_v2.prototxt', 'C:/Users/abdullah/Desktop/IP_project/colorization_release_v2.caffemodel')
# load cluster centers
pts_in_hull = np.load('C:/Users/abdullah/Desktop/IP_project/pts_in_hull.npy') 

# populate cluster centers as 1x1 convolution kernel
pts_in_hull = pts_in_hull.transpose().reshape(2, 313, 1, 1)

net.getLayer(net.getLayerId('class8_ab')).blobs = [pts_in_hull.astype(np.float32)]
net.getLayer(net.getLayerId('conv8_313_rh')).blobs = [np.full([1, 313], 2.606, np.float32)]

def color(frame): 
  # scale the pixel intensities to the range [0, 1]
  img_rgb = ( frame * 1.0 / 255).astype(np.float32
