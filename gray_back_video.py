import cv2
import numpy as np
import matplotlib.pyplot as plt
import matplotlib.image as mpimg
import torchvision.transforms as T
from PIL import Image
import shutil
from moviepy.editor import VideoFileClip, AudioFileClip
import moviepy.editor as mpe
import os
import torch
from torchvision import models
import errno, stat
import time
import glob
import sys

input = sys.argv[1]

def handleRemoveReadonly(func, path, exc):
  excvalue = exc[1]
  if func in (os.rmdir, os.remove) and excvalue.errno == errno.EACCES:
      os.chmod(path, stat.S_IRWXU| stat.S_IRWXG| stat.S_IRWXO) # 0777
      func(path)
  else:
      raise

fcn = models.segmentation.fcn_resnet101(pretrained=True).eval()

def Gray_background(path,image, nc=21):
  # Convert this 2D image to an RGB image where each label is mapped to its corresponding color
  label_colors = np.array([(0, 0, 0),  # 0=background
               #1=aeroplane, 2=bicycle,  3=bird,        4=boat,      5=bottle
               (128, 0, 0), (0, 128, 0), (128, 128, 0), (0, 0, 128), (128, 0, 128),
               #6=bus,        7=car,           8=cat,      9=chair,     10=cow
               (0, 128, 128), (128, 128, 128), (64, 0, 0), (192, 0, 0), (64, 128, 0),
               #11=dining table,12=dog,     13=horse,      14=motorbike,   15=person
               (192, 128, 0), (64, 0, 128), (192, 0, 128), (64, 128, 128), (192, 128, 128),
               #16=potted plant,17=sheep, 18=sofa,    19=train,      20=tv/monitor
               (0, 64, 0), (128, 64, 0), (0, 192, 0), (128, 192, 0), (0, 64, 128)])

  r = np.zeros_like(image).astype(np.uint8)
  g = np.zeros_like(image).astype(np.uint8)
  b = np.zeros_like(image).astype(np.uint8)
  
  for l in range(0, nc):
    idx = image == l
    r[idx] = label_colors[l, 0]
    g[idx] = label_colors[l, 1]
    b[idx] = label_colors[l, 2]
    
  rgb = np.stack([r, g, b], axis=2)

  # Load the foreground input image
  foreground = cv2.imread(path)
  # Resize image
  foreground = cv2.resize(foreground,(r.shape[1],r.shape[0]))
  # Create a background image by copying foreground and converting into grayscale
  background = cv2.cvtColor(foreground, cv2.COLOR_BGR2GRAY)
  # convert single channel grayscale image to 3-channel grayscale image
  background = cv2.cvtColor(background, cv2.COLOR_GRAY2RGB)
  # Convert uint8 to float
  foreground = foreground.astype(float)
  background = background.astype(float)
  # Create a binary mask of the RGB output map using the threshold value 0 
  # Our background pixels have a value of 0 so anything above this value is considered a foreground
  th, alpha = cv2.threshold(np.array(rgb),0,255, cv2.THRESH_BINARY)
  # Apply a slight blur to the mask to soften edges
  alpha = cv2.GaussianBlur(alpha, (7,7),0)
  # Normalize the alpha mask to keep intensity between 0 and 1
  alpha = alpha.astype(float)/255
  # Multiply the foreground with the alpha matte
  foreground = cv2.multiply(alpha, foreground)
  #Multiply the background with ( 1 - alpha )
  background = cv2.multiply(1.0 - alpha, background)
  # Add the masked foreground and background
  outImage = cv2.add(foreground, background)
  return outImage

# Opens the Video file
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
    # open image
    img = Image.open('photos/kang'+str(j)+'.jpg')
    # T.ToTensor() : Converts the image to type torch.Tensor and scales the values to [0, 1] range
    # T.Normalize(mean, std) : Normalizes the image with the given mean and standard deviation.
    trf = T.Compose([
                 T.ToTensor(), 
                 T.Normalize(mean = [0.485, 0.456, 0.406], 
                             std = [0.229, 0.224, 0.225])])

    # Unsqueeze the image so that it becomes [1 x C x H x W] from [C x H x W]
    # C is number of clases 21
    inp = trf(img).unsqueeze(0)
    # Pass image to the model 
    out = fcn(inp)['out']
    # To get 2D image [H*W] each pixel corresponds to a class
    om = torch.argmax(out.squeeze(), dim=0).detach().cpu().numpy()
    
    path = 'photos/kang'+str(j)+'.jpg'
    # Output
    rgb = Gray_background(path,om)

    cv2.imwrite('cartoonphotos/cartoon'+str(j)+'.jpg' , rgb)


 
img_array = []
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


