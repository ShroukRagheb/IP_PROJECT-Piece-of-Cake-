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
  #convert to Lab color space
  img_lab = cv2.cvtColor(img_rgb, cv2.COLOR_BGR2Lab)
   
  # pull out L channel
  img_l = img_lab[:,:,0]

  # original image size
  (H_orig,W_orig) = img_rgb.shape[:2] 

  # resize image to network input size
  img_rs = cv2.resize(img_rgb, (W_in, H_in))
  img_lab_rs = cv2.cvtColor(img_rs, cv2.COLOR_BGR2Lab)
  img_l_rs = img_lab_rs[:,:,0]

  # subtract 50 for mean-centering
  img_l_rs -= 50 

  # pass the L channel through the network which will predict the 'a' and 'b' channel values
  net.setInput(cv2.dnn.blobFromImage(img_l_rs))

  #Inference on network                                      
