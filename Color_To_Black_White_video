import cv2
import shutil
from moviepy.editor import VideoFileClip, AudioFileClip
import moviepy.editor as mpe
import os
import errno, stat
import time
import sys
input=sys.argv[1]
def handleRemoveReadonly(func, path, exc):
  excvalue = exc[1]
  if func in (os.rmdir, os.remove) and excvalue.errno == errno.EACCES:
      os.chmod(path, stat.S_IRWXU| stat.S_IRWXG| stat.S_IRWXO) # 0777
      func(path)
  else:
      raise

video= cv2.VideoCapture(input);
(major_ver, minor_ver, subminor_ver) = (cv2.__version__).split('.')
if int(major_ver)  < 3 :
    fps = video.get(cv2.cv.CV_CAP_PROP_FPS)
else :
    fps = video.get(cv2.CAP_PROP_FPS)
    
videoclip =mpe.VideoFileClip(input)
background_music = videoclip.audio

path = "photos"
shutil.rmtree(path, ignore_errors=False, onerror=handleRemoveReadonly)
time.sleep(1) 
os.makedirs(path)

i=0
while(video.isOpened()):
    ret, frame = video.read()
    if ret == False:
        break
    frame=cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)   
    cv2.imwrite('photos/kang'+str(i)+'.jpg',frame)
    i+=1
 
video.release()
cv2.destroyAllWindows()

img_array = []
for j in range (i):
    img = cv2.imread('photos/kang'+str(j)+'.jpg')
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
os.remove("output.avi")
