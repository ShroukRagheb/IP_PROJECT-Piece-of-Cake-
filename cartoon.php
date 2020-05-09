<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>
<style>
* {box-sizing: border-box;}

.img-comp-container {
  position: absolute;
  height: 90%; /*should be the same height as the images*/
  top:15%;
  bottom:20%;
  left:27%;
  right:20%;
}

.img-comp-img {
  position: absolute;
  width: auto;
  height: auto;
  overflow:hidden;
}

.img-comp-img img {
  display:block;
  vertical-align:middle;
}

.img-comp-slider {
  position: absolute;
  z-index:9;
  cursor: ew-resize;
  /*set the appearance of the slider:*/
  width: 4%;
  height: 4%;
  background-color: #2196F3;
  opacity: 0.7;
  border-radius: 50%;
}
h1 {
  color:white;
  font-family: verdana;
  font-size: 150%;
  text-align:center;
  text-shadow: -1px 0 palevioletred, 0 4px palevioletred, 4px 0 palevioletred, 0 -1px palevioletred;
 <!-- align="left|right|center|justify"-->
}

p1  {
  color: Black;
  font-family:verdana;
  font-size: 150%;
  position:absolute;
  top:10%;
  left:35%;
  bottom: 0;
  right: 1%;
  text-shadow: -1px 0 white, 0 4px white, 4px 0 white, 0 -1px white;
}
p{
  color: Black;
  font-family:verdana;
  font-size: 150%;
  position:absolute;
  top:87%;
  left:32%;
  bottom: 0;
  right: 1%;
  text-shadow: -1px 0 white, 0 4px white, 4px 0 white, 0 -1px white;
}
body {
  background-image: url("bb2.jpg");
  background-repeat: no-repeat;
  background-position:top;
  background-size:100%;
  background-attachment: scroll;
}
.btn {
  border: none; /* Remove borders */
  color: white; /* Add a text color */
  padding: 14px 28px; /* Add some padding */
  cursor: pointer; /* Add a pointer cursor on mouse-over */
  font-family: verdana;
  font-size: 100%;
  border-radius: 20px;;
}
.btn {
   background-color:palevioletred;
}
.btn:hover {
   background : white;
   color: palevioletred;
}

.back {
  margin: auto;
  position: absolute;
  top:90%;
  left:10%;
  bottom: 0;
  right: 80%;
  height: 60px;
}
.download{
  margin: auto;
  position: absolute;
  top:90%;
  left:55%;
  bottom: 0;
  right: 28%;
  height: 60px;
}

</style>
<script>
function initComparisons() {
  var x, i;
  /*find all elements with an "overlay" class:*/
  x = document.getElementsByClassName("img-comp-overlay");
  for (i = 0; i < x.length; i++) {
    /*once for each "overlay" element:
    pass the "overlay" element as a parameter when executing the compareImages function:*/
    compareImages(x[i]);
  }
  function compareImages(img) {
    var slider, img, clicked = 0, w, h;
    /*get the width and height of the img element*/
    w = img.offsetWidth;
    h = img.offsetHeight;
    /*set the width of the img element to 50%:*/
    img.style.width = (w / 2) + "px";
    /*create slider:*/
    slider = document.createElement("DIV");
    slider.setAttribute("class", "img-comp-slider");
    /*insert slider*/
    img.parentElement.insertBefore(slider, img);
    /*position the slider in the middle:*/
    slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
    slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
    /*execute a function when the mouse button is pressed:*/
    slider.addEventListener("mousedown", slideReady);
    /*and another function when the mouse button is released:*/
    window.addEventListener("mouseup", slideFinish);
    /*or touched (for touch screens:*/
    slider.addEventListener("touchstart", slideReady);
    /*and released (for touch screens:*/
    window.addEventListener("touchstop", slideFinish);
    function slideReady(e) {
      /*prevent any other actions that may occur when moving over the image:*/
      e.preventDefault();
      /*the slider is now clicked and ready to move:*/
      clicked = 1;
      /*execute a function when the slider is moved:*/
      window.addEventListener("mousemove", slideMove);
      window.addEventListener("touchmove", slideMove);
    }
    function slideFinish() {
      /*the slider is no longer clicked:*/
      clicked = 0;
    }
    function slideMove(e) {
      var pos;
      /*if the slider is no longer clicked, exit this function:*/
      if (clicked == 0) return false;
      /*get the cursor's x position:*/
      pos = getCursorPos(e)
      /*prevent the slider from being positioned outside the image:*/
      if (pos < 0) pos = 0;
      if (pos > w) pos = w;
      /*execute a function that will resize the overlay image according to the cursor:*/
      slide(pos);
    }
    function getCursorPos(e) {
      var a, x = 0;
      e = e || window.event;
      /*get the x positions of the image:*/
      a = img.getBoundingClientRect();
      /*calculate the cursor's x coordinate, relative to the image:*/
      x = e.pageX - a.left;
      /*consider any page scrolling:*/
      x = x - window.pageXOffset;
      return x;
    }
    function slide(x) {
      /*resize the image:*/
      img.style.width = x + "px";
      /*position the slider:*/
      slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";
    }
  }
}
</script>
</head>
<body style=" overflow: hidden;/* Hide scrollbars */">

<h1>Photo Before and After</h1>
<p>Drag the Blue point to reveal the before and after</p>
<p1>Click on the wanted image to download it:</p1>
<div class="img-comp-container">
  <div class="img-comp-img">
    <a href="input/input.jpg" download>
    <img src="input/input.jpg" width="800" height="550">
	</a>
  </div>
  <div class="img-comp-img img-comp-overlay">
    <a href='output/output.jpg' download>
    <img src='output/output.jpg' width="800" height="550">
	</a>
  </div> 
</div>
<!--<a class="btn download"href="cartoon/shosh.jpg"><i class="fa fa-download"></i>Download</a>-->
<button id="B1" class="btn back" onClick="window.location='p1.php';" ><b>BACK</b></button>

<script>
/*Execute a function that will execute an image compare function for each element with the img-comp-overlay class:*/
initComparisons();
</script>

</body>
</html>
       