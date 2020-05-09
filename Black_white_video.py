import cv2
import shutil
from moviepy.editor import VideoFileClip, AudioFileClip
import moviepy.editor as mpe
import os
import numpy as np
from PIL import Image
import glob
import errno, stat
import time
import sys
input = sys.argv[1]
#Network input size
W_in = 224
H_in = 224
# Create network graph and load weights
net = cv2.dnn.readNetFromCaffe('C:/Users/abdullah/Desktop/IP_project/colorization_deploy_v2.prototxt', 'C:/Users/abdullah/Desktop/IP_project/colorization_release_v2.caffemodel')
# load cluster centers
pts_in_hull = np.load('C:/Users/abdullah/Desktop/IP_project/pts_in_hull.npy') 
# populate cluster centers as 1x1 convolution kernel
pts_in_hull = pts_in_hull.transpose().reshape(2, 313, 1, 1)
net.getLayer(net.getLayerId('class8_ab')).blobs = [pts_in_hull.astype(np.float32)]
net.getLayer(net.getLayerId('conv8_313_rh')).blobs = [np.full([1, 313], 2.606, np.float32)]
def handleRemoveReadonly(func, path, exc):
  excvalue = exc[1]
  if func in (os.rmdir, os.remove) and excvalue.errno == errno.EACCES:
      os.chmod(path, stat.S_IRWXU| stat.S_IRWXG| stat.S_IRWXO) # 0777
      func(path)
  else:
      raise
def color(frame): 
    # scale the pixel intensities to the range [0, 1]
    img_rgb = ( frame * 1.0 / 255).astype(np.float32)
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
    ab_dec = net.forward('class8_ab')[0,:,:,:].transpose((1,2,0)) # this is our result

    #Resize to original size
    ab_dec_us = cv2.resize(ab_dec, (W_orig, H_orig))

    # concatenate with original image i.e. L channel
    img_lab_out = np.concatenate((img_l[:,:,np.newaxis],ab_dec_us),axis=2) 

    # convert to BGR space from Lab space
    img_bgr_out = cv2.cvtColor(img_lab_out, cv2.COLOR_Lab2BGR)

    # Clip and then rescale to 0-255
    img_bgr_out = (255 * np.clip(img_bgr_out, 0, 1)).astype("uint8")

    return img_bgr_out

# Opens the Video file
video= cv2.VideoCapture(input);
(major_ver, minor_ver, subminor_ver) = (cv2.__version__).split('.')
if int(major_ver)  < 3 :
    fps = video.get(cv2.cv2.cv2_CAP_PROP_FPS)
    #print (fps)
else :
    fps = video.get(cv2.CAP_PROP_FPS)
    #print (fps)
    
videoclip =mpe.VideoFileClip(input)
background_music = videoclip.audio

path = "C:/xampp/htdocs/photos"
shutil.rmtree(path, ignore_errors=False, onerror=handleRemoveReadonly)
time.sleep(1) 
os.makedirs(path)

i=0
while(video.isOpened()):
    ret, frame = video.read()

    if ret == False:
        break
        
    cv2.imwrite('photos/kang'+str(i)+'.jpg',frame)
    i+=1
 
video.release()
cv2.destroyAllWindows()


path = "C:/xampp/htdocs/cartoonphotos"
shutil.rmtree(path, ignore_errors=False, onerror=handleRemoveReadonly)
time.sleep(1)   
os.makedirs(path)



for j in range (i):
    # Read the input image in BGR(CV2) format
    frame = cv2.imread('photos/kang'+str(j)+'.jpg')
    
    # Output
    out = color(frame)

    cv2.imwrite('cartoonphotos/cartoon'+str(j)+'.jpg' , out)

 
img_array = []
len = 0

for j in range (i):
    img = cv2.imread('cartoonphotos/cartoon'+str(j)+'.jpg')
    height, width, layers = img.shape
    size = (width,height)
    img_array.append(img)
 
out = cv2.VideoWriter('output.avi',cv2.VideoWriter_fourcc(*'mp4v'), fps, size)

for m in range(i):
    out.write(img_array[m])

out.release()

my_original_clip = mpe.VideoFileClip('output.avi')
new_clip = my_original_clip.set_audio(background_music)
new_clip.write_videofile("output.mp4")

path = "C:/xampp/htdocs/photos"
shutil.rmtree(path, ignore_errors=False, onerror=handleRemoveReadonly)
time.sleep(1)
os.makedirs(path)

path = "C:/xampp/htdocs/cartoonphotos"
shutil.rmtree(path, ignore_errors=False, onerror=handleRemoveReadonly)
time.sleep(1)
os.makedirs(path)

os.remove("output.avi")
