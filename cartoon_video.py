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
    img_edge = cv2.resize(img_edge,(y,x)) 
    img_edge = cv2.cvtColor(img_edge, cv2.COLOR_GRAY2RGB)
    return cv2.bitwise_and(img_color, img_edge)

video= cv2.VideoCapture(input);
(major_ver, minor_ver, subminor_ver) = (cv2.__version__).split('.')
if int(major_ver)  < 3 :
    fps = video.get(cv2.cv.CV_CAP_PROP_FPS)
else :
    fps = video.get(cv2.CAP_PROP_FPS)
    
    
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
    img_rgb = cv2.imread('photos/kang'+str(j)+'.jpg')
    res = cartoon(img_rgb)
    res = cv2.resize(res,(img_rgb.shape[1],img_rgb.shape[0]))
    cv2.imwrite('cartoonphotos/cartoon'+str(j)+'.jpg' , res)

 
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

my_original_clip = mpe.VideoFileClip("output.avi")
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
