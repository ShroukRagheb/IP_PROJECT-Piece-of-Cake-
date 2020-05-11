<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("p").toggle();
  });
});

</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.vertical-menu {
  width:18%;
}
.V1 {
  border-left: 6px solid black;
  height: 107%;
  position: absolute;
  left: 18.2%;
  margin-left: -3px;
  top: 0;
}
.V2 {
  border-left: 6px solid black;
  height: 107%;
  position: absolute;
  left: 0.5%;
  margin-left: -3px;
  top: 0;
}
.V3 {
  border-left: 6px solid black;
  height:98%;
  position: absolute;
  left:50%;
  margin-left: -3px;
  top:1%;
}
.H1 {
  background-color:black; 
  width:18%;
  height:1.5%;
  position: absolute;
  left: 0.5%;
  margin-left: -3px;
  top: 0%;
}
.H2{
  background-color:black; 
  width:18%;
  height:0.7%;
  position: absolute;
  left: 0.5%;
  margin-left: -3px;
  top: 106.4%;
}

.vertical-menu a {
  background-color: RosyBrown;
  color: white;
  display: block;
  padding: 25px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: black;
  color:RosyBrown;
}

.vertical-menu a.active {
  background-color: white;
  color: RosyBrown;
}

p{
  color:black;
 }    
 


.btn {
  border: none; /* Remove borders */
  color: RosyBrown; /* Add a text color */
  cursor: pointer; /* Add a pointer cursor on mouse-over */
  font-family: verdana;
  padding: 12px 16px;
  font-size: 125%;
  border-radius: 20px;
  text-shadow:  5px darkseagreen;
  margin: auto;
  background-color:white;
}

.btn:hover{
   background :Black ;
   color: RosyBrown;
}
.home {
   width:10% ;
   position: absolute;
   top:105%;
   left:3.5%;
   bottom: 0;
   height: 7%;
}

.CONVERT:hover{
  background-color:lightgray;
  background :lightgray ;
    color: red;
 }

.hoverWrapper #hoverShow1{
  display: none;
  position: absolute;
  padding: 5px 5px;
  width: 20%;
  height: 15%;
  left: 16%;
  top: 7%;
  border-radius: 20px;
  
}

.hoverWrapper:hover #hoverShow1 {
  background-color: black;
  color:RosyBrown;  
  display: block;
}
.hoverWrapper #hoverShow2{
  display: none;
  position: absolute;
  padding: 5px 5px;
  width: 20%;
  height: 15%;
  left: 16%;
  top: 17%;
  border-radius: 20px;
}

.hoverWrapper:hover #hoverShow2 {
  background-color: black;
  color:RosyBrown;  
  display: block;
}

.hoverWrapper #hoverShow3{
  display: none;
  position: absolute;
  padding: 5px 5px;
  width: 20%;
  height: 15%;
  left: 16%;
  top: 27%;
  border-radius: 20px;
}
.hoverWrapper:hover #hoverShow3 {
  background-color: black;
  color:RosyBrown;  
  display: block;
}
.hoverWrapper #hoverShow4{
  display: none;
  position: absolute;
  padding: 5px 5px;
  width: 20%;
  height: 15%;
  left: 16%;
  top: 37%;
  border-radius: 20px;
}
.hoverWrapper:hover #hoverShow4 {
  background-color: black;
  color:RosyBrown;  
  display: block;
}
.hoverWrapper #hoverShow5{
  display: none;
  position: absolute;
  padding: 5px 5px;
  width: 20%;
  height: 15%;
  left: 16%;
  top: 47%;
  border-radius: 20px;
}
.hoverWrapper:hover #hoverShow5 {
  background-color: black;
  color:RosyBrown;  
  display: block;
}
.hoverWrapper #hoverShow6{
  display: none;
  position: absolute;
  padding: 5px 5px;
  width: 20%;
  height: 15%;
  left: 16%;
  top: 57%;
  border-radius: 20px;
}
.hoverWrapper:hover #hoverShow6 {
  background-color: black;
  color:RosyBrown;  
  display: block;
}
.hoverWrapper #hoverShow7{
  display: none;
  position: absolute;
  padding: 5px 5px;
  width: 20%;
  height: 15%;
  left: 16%;
  top: 67%;
  border-radius: 20px;
}
.hoverWrapper:hover #hoverShow7 {
  background-color: black;
  color:RosyBrown;  
  display: block;
}


p1  {
  color: white;
  font-family:verdana;
  font-size: 120%;
  text-align:left;
}
img{
  border-radius:50%;
}
p2 {
  color: white;
  font-family:verdana;
  font-size: 400%;
  position:absolute;
  top:20%;
  left:10%;
  bottom: 0;
  right: 1%;
  text-shadow: -1px 0 palevioletred, 0 4px palevioletred, 4px 0 palevioletred, 0 -1px palevioletred;
}
p3 {
  color: white;
  font-family:verdana;
  font-size: 350%;
  position:absolute;
  top:35%;
  left:13%;
  bottom: 0;
  right: 1%;
  text-shadow: -1px 0 DarkCyan, 0 4px DarkCyan, 4px 0 DarkCyan, 0 -1px DarkCyan;
}

p4 {
  color: white;
  font-family:verdana;
  font-size: 350%;
  position:absolute;
  top:46%;
  left:17%;
  bottom: 0;
  right: 1%;
  text-shadow: -1px 0 DarkCyan, 0 4px DarkCyan, 4px 0 DarkCyan, 0 -1px DarkCyan;
}
label{
  color: red;
}

</style>



</head>
<body style="background-color:RosyBrown; overflow-x: hidden;/* Hide scrollbars */">

<button class="btn home" onClick="window.location='index.php';"><i class="fa fa-home"></i><b> Home</b></button>
<div class="V1"></div>
<div class="V2"></div>
<div class="H1"></div>
<div class="H2"></div>


<div id="content" class="col-sm-9">

<div class="show" id="0" style="display:block; width:80.5%; height:96%; background-color:gray; position: absolute;
  left:18.7%; top:2%; bottom:2%;">
  <div class="V3"></div>
  <div style=" height:50% ;position:absolute; top:2%; left:2%;">
  <img id="I01" src="baby1.jpg" style="width:28%; height:98%;"/>
</div>
<div style=" height:50% ;position:absolute; top:2%; left:26%;">
  <img id="I011" src="baby2.jpg" style="width:28%; height:98%;"/>
</div>
<div class="split left" style="display:block;  width:40%; height:29%; padding: 0.5% 0.5%;border-radius: 10.9%; background-color:lightgray; position:absolute;
    left:5%; top:68%; bottom:0;"></br></br>
    <p1>Select Your Photo then click on <ins>CONVERT</ins> button</p1><hr><br>
  <form action="upload.php" enctype="multipart/form-data" method="post" >
  <label for="file01" class="btn cartoonize">Select Your Photo</label>
    <input id="file01" name="file01" onchange="readURL0(this);"  type="file"><br><br>
  <!--<input type="file" name="file11" id="file11" onchange="readURL1(this);"/>-->
  <div style=" position:absolute; left:35%; top:68%; bottom:0;">
  <input type="submit" class="btn cartoonize" value="CONVERT" name="Submit01"/>
</div>
</br>
</form>
</div></br>    
  <!--<input type="file" name="file01" id="file01" onchange="readURL0(this);"/>-->

<div style="display:block; width:6.5%; height:3%; padding: 0.5% 0.5% ;background-color:lightgray; position:absolute;
    left:22.7%; top:82%; bottom:0;"></div>
<div style="display:block; width:49.5%; height:98.3%; padding: 0.5% 0.5%; background-color:gray; position:absolute;
    left:50.2%; top:0%; bottom:0;">
<video id="player0" alt="your video" src="AMR.mp4" width="300" height="400" controls></video>
<video id="player02" alt="your video"   src="AMR2.mp4" width="300" height="400" controls></video></br>
</div>
<div style="display:block; width:40%; height:29%; padding: 0.5% 0.5%;border-radius: 10.9%; background-color:lightgray; position:absolute;
    left:55%; top:68%; bottom:0;"></br></br>
  <p1>Select Your Video then click on <ins>CONVERT</ins> button</p1><hr><br>
  <form action="upload.php" enctype="multipart/form-data" method="post" >
  <label for="file02" class="btn cartoonize">Select Your Video</label>
    <input id="file02" type="file" name="file02" accept="video/*" capture="camera" id="recorder0"/><br><br>
  <!--<input type="file" name="file12" id="file12" accept="video/*" capture="camera" id="recorder1"/>-->
  <div style=" position:absolute; left:35%; top:68%; bottom:0;">
  <input type="submit" class="btn cartoonize" value="CONVERT" name="Submit02"/>
</div>
</div>
<div style="display:block; width:6.7%; height:3%; padding: 0.5% 0.5% ;background-color:lightgray; position:absolute;
    left:72.5%; top:82.5%; bottom:0;">
    </div>
</div>
  
  
<div class="show" id="1"  style="display:block; width:80.5%; height:96%; background-color:lightgray; position: absolute;
  left:18.7%; top:2%; bottom:2%;">
  <div class="V3"></div>
  
    <div style=" height:50% ;position:absolute; top:2%; left:2%;">
    <img id="I11" src="bg1.jpg" style="width:44%; height:98%;"/>
  </div>
  <div style=" height:50% ;position:absolute; top:2%; left:25%;">
  <img id="I111" src="B&W.jpg" style="width:44%; height:98%;"/>
</div>
<div class="split left" style="display:block;  width:40%; height:29%; padding: 0.5% 0.5%;border-radius: 10.9%; background-color:gray; position:absolute;
    left:5%; top:68%; bottom:0;"></br></br>
  <p1>Select Your Photo then click on <ins>CONVERT</ins> button</p1><hr><br>
  <form action="upload.php" enctype="multipart/form-data" method="post" >
  <label for="file11" class="btn cartoonize">Select Your Photo</label>
    <input id="file11" type="file" name="file11" onchange="readURL1(this);"/><br><br>
  <!--<input type="file" name="file11" id="file11" onchange="readURL1(this);"/>-->
  <div style=" position:absolute; left:35%; top:68%; bottom:0;">
  <input type="submit" class="btn cartoonize" value="CONVERT" name="Submit11"/>
</div>
</br>
</form>
</div></br>
<div style="display:block; width:6.5%; height:3%; padding: 0.5% 0.5% ;background-color:gray; position:absolute;
    left:22.7%; top:82%; bottom:0;"></div>
<div style="display:block; width:49.5%; height:98.3%; padding: 0.5% 0.5%; background-color:lightgray; position:absolute;
    left:50.2%; top:0%; bottom:0;">
<video id="player1" alt="your video" src="corona.mp4" width="300" height="400" controls></video>
<video id="player12" alt="your video"   src="corona2.mp4" width="300" height="400" controls></video></br>
</div>
<div style="display:block; width:40%; height:29%; padding: 0.5% 0.5%;border-radius: 10.9%; background-color:gray; position:absolute;
    left:55%; top:68%; bottom:0;"></br></br>
  <p1>Select Your Video then click on <ins>CONVERT</ins> button</p1><hr><br>
  <form action="upload.php" enctype="multipart/form-data" method="post" >
  <label for="file12" class="btn cartoonize">Select Your Video</label>
    <input id="file12" type="file" name="file12" accept="video/*" capture="camera" id="recorder1"/><br><br>
  <!--<input type="file" name="file12" id="file12" accept="video/*" capture="camera" id="recorder1"/>-->
  <div style=" position:absolute; left:35%; top:68%; bottom:0;">
  <input type="submit" class="btn cartoonize" value="CONVERT" name="Submit12"/>
</div>
</form>
</div>
<div style="display:block; width:6.7%; height:3%; padding: 0.5% 0.5% ;background-color:gray; position:absolute;
    left:72.5%; top:82.5%; bottom:0;">
</div>
</div>
  
  
<div class="show" id="2" style="display:block; width:80.5%; height:96%; background-color:gray; position: absolute;
  left:18.7%; top:2%; bottom:2%;">
  <div class="V3"></div>
 <div style=" height:50% ;position:absolute; top:2%; left:2%;">
  <img id="I21" src="black.jpg" style="width:98%; height:98%;"/>
</div>
<div style=" height:50% ;position:absolute; top:2%; left:25%;">
  <img id="I22" src="black2.jpg" style="width:98%; height:98%;"/>
</div>
<div class="split left" style="display:block;  width:40%; height:29%; padding: 0.5% 0.5%;border-radius: 10.9%; background-color:lightgray; position:absolute;
    left:5%; top:68%; bottom:0;"></br></br>
  <p1 style="color:DarkSlateGrey;">Select Your Photo then click on <ins>CONVERT</ins> button</p1><hr><br>
  <form action="upload.php" enctype="multipart/form-data" method="post" >
  <label for="file21" class="btn cartoonize">Select Your Photo</label>
    <input type="file" name="file21" id="file21" onchange="readURL2(this);"/><br><br>
  <!--<input type="file" name="file21" id="file21" onchange="readURL2(this);"/>-->
  <div style=" position:absolute; left:35%; top:68%; bottom:0;">
  <input type="submit" class="btn cartoonize" value="CONVERT" name="Submit21"/>
</div>
    </form>
</div>
<div style="display:block; width:6.5%; height:3%; padding: 0.5% 0.5% ;background-color:lightgray; position:absolute;
    left:22.7%; top:82%; bottom:0;"></div>
<div style="display:block; width:49.5%; height:98.3%; padding: 0.5% 0.5%; background-color:gray; position:absolute;
    left:50.2%; top:0%; bottom:0;">
<video id="player2" alt="your video" src="blackvideo.mp4" width="300" height="400" controls></video>
<video id="player22" alt="your video" src="blackvideo2.mp4" width="300" height="400" controls></video></br>
</div>
<div style="display:block; width:40%; height:29%; padding: 0.5% 0.5%;border-radius: 10.9%; background-color:lightgray; position:absolute;
    left:55%; top:68%; bottom:0;"></br></br>
  <p1 style="color:DarkSlateGrey;">Select Your Video then click on <ins>CONVERT</ins> button</p1><hr><br>
  <form action="upload.php" enctype="multipart/form-data" method="post" >
  <label for="file22" class="btn cartoonize">Select Your Video</label>
    <input id="file22" type="file" name="file22" accept="video/*" capture="camera" id="recorder2"/><br><br>
  <!--<input type="file" name="file22" id="file22" accept="video/*" capture="camera" id="recorder2"/>-->
  <div style=" position:absolute; left:35%; top:68%; bottom:0;">
  <input type="submit" class="btn cartoonize" value="CONVERT" name="Submit22"/>
</div>
</div>
<div style="display:block; width:6.7%; height:3%; padding: 0.5% 0.5% ;background-color:lightgray; position:absolute;
    left:72.5%; top:82.5%; bottom:0;">
</div>
</div>
  
  
<div class="show" id="3" style="display:block; width:80%; height:96%; background-color:lightgray; position: absolute;
  left:19.2%; top:2%; bottom:2%;">
  <div style="display:block; width:100%; height:100%; background-color:none; position: absolute;
  left:13%; top:2%; bottom:10%;"> 
  <img id="I31" src="gray.jpg"style="width:25%; height:50%;" />
</div>
<div style=" width:100%; height:100%;position:absolute; top:2%; left:40%;">
  <img id="I32" src="back.jpg"style="width:25%; height:50%;" />
</div>
<div style=" width:100%; height:100%; position:absolute; top:2%; left:67%;">
  <img id="I33" src="chbg.jpg"style="width:25%; height:50%;" />
  </div>
  <div class="split right" style="display:block; width:66%; height:33%; padding: 0.5% 0.5%;border-radius:10.9% ; background-color:gray; position:absolute;
    left:18%; top:60%; bottom:0;"></br></br>
  <p1 style="color:white;">Select Your Photo and New Background then click on <ins>CONVERT</ins> button</p1><hr><br>
  <form action="upload.php" enctype="multipart/form-data" method="post" >
  <div style=" position:absolute; left:5%; top:40%; bottom:0;">
  <label for="file31" class="btn cartoonize">Select Your Photo</label>
  <label for="file32" class="btn cartoonize">Select New Background</label>
 
  <input type="submit" class="btn cartoonize" value="CONVERT" name="Submit31"/>
</div><br><br><br>
    <input id="file31" type="file" name="file31" onchange="readURL3(this);" /> 
  <!--<input type="file" name="file31" id="file31" value="image" onchange="readURL3(this);"/>-->
    <input id="file32" type="file" name="file32" onchange="readURL33(this);"/>
  <!--<input type="file" name="file32" id="file32" value="New_Background" onchange="readURL33(this);"/>-->

    </form>
</div>
<div style="display:block; width:6.7%; height:5%; padding: 0.5% 0.5%; background-color:gray; position:absolute;
    left:18%; top:81.5%; bottom:0;"></div>
<div style="display:block; width:6.5%; height:5%; padding: 0.5% 0.5%; background-color:gray; position:absolute;
    left:39.55%; top:81.5%; bottom:0;"></div>
</div>
</div>
  
  
<div  class="show" id="4" style="display:block; width:80.5%; height:96%; background-color:gray; position: absolute;
  left:18.7%; top:2%; bottom:2%;">
  <div class="V3"></div>
 <div style=" height:50% ;position:absolute; top:2%; left:2%;">
  <img id="I41" src="gray5.jpg" style="width:38%; height:98%;"/>
</div>
<div style=" height:50% ;position:absolute; top:2%; left:25%;">
  <img id="I42" src="graybackk.jpg" style="width:38%; height:98%;"/>
</div>
<div class="split left" style="display:block;  width:40%; height:29%; padding: 0.5% 0.5%;border-radius: 10.9%; background-color:lightgray; position:absolute;
    left:5%; top:68%; bottom:0;"></br></br>
  <p1 style="color:DarkSlateGrey;">Select Your Photo then click on <ins>CONVERT</ins> button</p1><hr><br>
  <form action="upload.php" enctype="multipart/form-data" method="post" >
  <label for="file41" class="btn cartoonize">Select Your Photo</label>
  <input id="file41" type="file" name="file41" onchange="readURL4(this);"/><br><br>
  <!--<input type="file" name="file41" id="file41" onchange="readURL4(this);"/>-->
  <div style=" position:absolute; left:35%; top:68%; bottom:0;">
  <input type="submit" class="btn cartoonize" value="CONVERT" name="Submit41"/>
</div>
    </form>
</div>
<div style="display:block; width:6.5%; height:3%; padding: 0.5% 0.5% ;background-color:lightgray; position:absolute;
    left:22.7%; top:82%; bottom:0;"></div>
<div style="display:block; width:49.5%; height:98.3%; padding: 0.5% 0.5%; background-color:gray; position:absolute;
    left:50.2%; top:0%; bottom:0;">
<video id="player4" alt="your video" src="graybackvideo.mp4" width="300" height="400" controls></video>
<video id="player" alt="your video" src="graybackvideo2.mp4" width="300" height="400" controls></video></br>
</div>
<div style="display:block; width:40%; height:29%; padding: 0.5% 0.5%;border-radius: 10.9%; background-color:lightgray; position:absolute;
    left:55%; top:68%; bottom:0;"></br></br>
  <p1 style="color:DarkSlateGrey;">Select Your Video then click on <ins>CONVERT</ins> button</p1><hr><br>
  <form action="upload.php" enctype="multipart/form-data" method="post" >
  <label for="file42" class="btn cartoonize">Select Your Video</label>
    <input id="file42" type="file" name="file42" accept="video/*" capture="camera" id="recorder4"/><br><br> 
  <!--<input type="file" name="file42" id="file42" accept="video/*" capture="camera" id="recorder4"/>-->
  <div style=" position:absolute; left:35%; top:68%; bottom:0;">
  <input type="submit" class="btn cartoonize" value="CONVERT" name="Submit42"/>
</div>
</div>
<div style="display:block; width:6.7%; height:3%; padding: 0.5% 0.5% ;background-color:lightgray; position:absolute;
    left:72.5%; top:82.5%; bottom:0;">
</div>
</div>
  
  
  <div class="show"  id="5" style="display:block; width:80%; height:96%; background-color:lightgray; position: absolute;
  left:19.2%; top:2%; bottom:2%;">
  <div style="display:block; width:66%; height:90%; background-color:none; position: absolute;
  left:25%; top:2%; bottom:10%;"> 
  <img id="I51" src="color1.jpg"style="width:40%; height:55%;" />
</div>
<div style=" width:66%; height:90%;position:absolute; top:2%; left:53%;">
  <img id="I52" src="color2.jpg"style="width:40%; height:55%;" />
  </div>
  <div class="split right" style="display:block; width:66%; height:37%; padding: 0.5% 0.5%;border-radius: 10.9%; background-color:gray; position:absolute;
    left:17%; top:60%; bottom:0;"></br></br>
  <p1 style="color:white;">Select Your Photo and the color range of an object that you want to change, and the New Color, then click on <ins>CONVERT</ins> button</p1><hr>
  <form action="upload.php" enctype="multipart/form-data" method="post" ><br>
  <label for="file51" class="btn cartoonize">Select Your Photo</label>
  <label class="btn cartoonize">Enter first color</label> <input type="color" name="MyColorPicker1" id="MyColorPicker1"/>
  <label class="btn cartoonize">Enter second color</label> <input type="color" name="MyColorPicker2" id="MyColorPicker2"/><br><br><hr>
  <label class="btn cartoonize">change to</label>  <input type="color" name="MyColorPicker3" id="MyColorPicker3"/>
    <input type="file" name="file51" id="file51" value="image" onchange="readURL5(this);"/>
  <!--<input type="file" name="file51" id="file51" value="image" onchange="readURL5(this);"/><hr/> -->
  <input type="submit" class="btn cartoonize" value="CONVERT" name="Submit51"/>
    </form>
</div>
<div style="display:block; width:20.55%; height:4%; padding: 0.5% 0.5%; background-color:gray; position:absolute;
    left:32.7%; top:88%; bottom:0;"></div>
  </div>
  

  <div class="show" id="6" style="display:block; width:80%; height:96%; background-color:lightgray; position: absolute;
  left:19.2%; top:2%; bottom:2%;">
  <div style="display:block;  width:100%; height:100%; background-color:none; position: absolute;
  left:13%; top:2%; bottom:10%;"> 
  <img id="I61" src="shirt1.jpg"style="width:25%; height:50%;" />
</div>
<div style="  width:100%; height:100%;position:absolute; top:2%; left:40%;">
  <img id="I62" src="shirt2.jpg"style="width:25%; height:50%;" />
</div>
<div style="  width:100%; height:100%; position:absolute; top:2%; left:67%;">
  <img id="I63" src="shirt3.jpg"style="width:25%; height:50%;" />
  </div>
  <div class="split right" style="display:block; width:66%; height:33%; padding: 0.5% 0.5%;border-radius:10.9% ; background-color:gray; position:absolute;
    left:18%; top:60%; bottom:0;"></br></br>
  <p1 style="color:DarkSlateGrey;">Select Your Photo then click on <ins>CONVERT</ins> button</p1><hr>
  <form action="upload.php" enctype="multipart/form-data" method="post" ><br>
  <div style=" position:absolute; left:5%; top:40%; bottom:0;">
  <label for="file61" class="btn cartoonize">Select Your Photo</label>
  <label for="file62" class="btn cartoonize">Select New Piece</label>
  <input type="submit" class="btn cartoonize" value="CONVERT" name="Submit61"/>
  </div><br><br><br>
  <input type="file" name="file61" id="file61" onchange="readURL6(this);"/>
  <!--<input type="file" name="file61" id="file61" value="image" onchange="readURL6(this);"/>-->
  
    <input type="file" name="file62" id="file62" onchange="readURL66(this);"/>
  <!--<input type="file" name="file62" id="file62" value="New_Background" onchange="readURL66(this);"/>-->
  
    </form>
</div>
<div style="display:block; width:6.7%; height:5%; padding: 0.5% 0.5%; background-color:gray; position:absolute;
    left:18%; top:81.5%; bottom:0;"></div>
<div style="display:block; width:6.5%; height:5%; padding: 0.5% 0.5%; background-color:gray; position:absolute;
    left:39.55%; top:81.5%; bottom:0;"></div>
  </div>
  
  <div class="show"  id="8" style="display:block; width:80%; height:96%; background-color:lightgray; position: absolute;
  left:19.2%; top:2%; bottom:2%;">
  <div style="display:block; width:66%; height:90%; background-color:none; position: absolute;
  left:25%; top:2%; bottom:10%;"> 
  <img id="I81" src="edge_image.jpg"style="width:40%; height:55%;" />
</div>
<div style=" width:66%; height:90%;position:absolute; top:2%; left:53%;">
  <img id="I82" src="edge_image2.jpg"style="width:40%; height:55%;" />
  </div>
  <div class="split right" style="display:block; width:66%; height:30%; padding: 0.5% 0.5%;border-radius: 10.9%; background-color:gray; position:absolute;
    left:17%; top:60%; bottom:0;"></br></br>
  <p1 style="color:white;">Select Your Photo then click on <ins>CONVERT</ins> button</p1><hr>
  <form action="upload.php" enctype="multipart/form-data" method="post" ><br>
  <label for="file81" class="btn cartoonize">Select Your Photo</label>
 
    <input type="file" name="file81" id="file81" value="image" onchange="readURL8(this);"/> <br>
  <!--<input type="file" name="file51" id="file51" value="image" onchange="readURL5(this);"/><hr/> -->
  <div style=" position:absolute; left:35%; top:62%; bottom:0;">
  <input type="submit" class="btn cartoonize" value="CONVERT" name="Submit81"/>
</div>
    </form>
</div>
<div style="display:block; width:6.5%; height:4%; padding: 0.5% 0.5%; background-color:gray; position:absolute;
    left:34.7%; top:73%; bottom:0;"></div>
  </div>
  <div class="show" id="7" style="display:block; width:85%; height:96%; background-color:RosyBrown; position: absolute;
  left:18.7%; top:2%; bottom:2%;">
  <p2><strong>Piece Of Cake</strong></p2>
  <p3><strong>Get Ready To</strong></p3>
  <p4><strong>Have Fun!</strong></p4>
  <img src="best.gif" style=" width: ; height :95%; position:absolute; left:55%"/>
  </div>
</div>


<div>
  <div class="vertical-menu">
    <a href="#" class="active" style="font-size:260%;text-shadow: 3px 3px white;" >Options</a>
    <div style="background-color:RosyBrown; font-size:20%;">........................</div>
    
    <a  class="hoverWrapper" id="a1" href="#" style="font-size:21px;" ><b>Cartoon</b>
    <div id="hoverShow1" style="text-align : center;">Convert normal video or image to cartoon </br></br>Click on it to Try</div></a><div style="background-color:black; font-size:20%;">........................</div>
    <!--<p>convert normal video or image to cartoon</p>-->
   
    <a  class="hoverWrapper" id="a2" href="#" style="font-size:21px;"><b>Black and White</b>
    <div id="hoverShow2"style="text-align : center;">Convert normal colorful video or image to Black and White</br></br>Click on it to Try</div></a><div style="background-color:black; font-size:20%;">........................</div>
    <!--<p>convert normal colorful video or image to Black and White</p>-->
    
    <a  class="hoverWrapper" id="a3" href="#" style="font-size:21px;" ><b>Colorize Photos/Videos</b>
    <div id="hoverShow3" style="text-align : center;">Colorize Black and White video or image</br></br>Click on it to Try</div></a><div style="background-color:black; font-size:20%;">........................</div>
    <!--<p>convert normal Black and White video or image to colorful</p>-->
    
    <a class="hoverWrapper" id="a4" href="#" style="font-size:21px;" ><b>Change Background</b>
    <div id="hoverShow4"style="text-align : center;">Change background with a new background</br></br>Click on it to Try</div></a><div style="background-color:black; font-size:20%;">........................</div>
    <!--<p>change background with a new background</p>-->
    
    <a class="hoverWrapper" id="a5" href="#" style="font-size:21px;"><b>Gray Background</b>
    <div id="hoverShow5"style="text-align : center;">Convert video background or image background to gray</br></br>Click on it to Try</div></a><div style="background-color:black; font-size:20%;">........................</div>
    <!--<p>convert video background or image background to gray</p>-->
    
    <a class="hoverWrapper"id="a6" href="#" style="font-size:21px;"><b>Change Object Color</b>
    <div id="hoverShow6"style="text-align : center;">Change object color with selected new color</br></br>Click on it to Try</div></a><div style="background-color:black; font-size:20%;">........................</div>
    <!--<p>change T-shirt color with selected new color</p>-->
    
    <a class="hoverWrapper" id="a9" href="#" style="font-size:21px;"><b>Edges</b>
    <div id="hoverShow7"style="text-align : center;">Convert normal photo to edges, so yo can paint it </br></br>Click on it to Try</div></a><div style="background-color:black; font-size:20%;">........................</div>

    <a class="hoverWrapper" id="a7" href="#" style="font-size:21px;"><b>Dress_Room</b>
    <div id="hoverShow7"style="text-align : center;">Try a new piece to see if it fit or not</br></br>Click on it to Try</div></a><div style="background-color:black; font-size:20%;">........................</div>
    <!--<p>try a new piece to see if it fit or not </p>-->
    
    <a class="hover" id="a8" href="#" style="font-size:10px;">
    <div id="Show8"style="text-align : center;"></div></a>
    <!--<p>try a new piece to see if it fit or not </p>-->
  </div>
</div>



<script>
   $(document).ready(function() {
  $("#a1").click(function() {
    $("#6").css("display", "none");
    $("#1").css("display", "none");
    $("#2").css("display", "none");
    $("#3").css("display", "none");
  $("#4").css("display", "none");
  $("#5").css("display", "none");
  $("#7").css("display", "none");
  $("#0").css("display", "block");
  $("#8").css("display", "none");
  });

  $("#a2").click(function() {
    $("#0").css("display", "none");
    $("#2").css("display", "none");
    $("#3").css("display", "none");
    $("#4").css("display", "none");
  $("#5").css("display", "none");
  $("#6").css("display", "none");
  $("#7").css("display", "none");
  $("#8").css("display", "none");
  $("#1").css("display", "block");
  });

  $("#a3").click(function() {
    $("#0").css("display", "none");
    $("#1").css("display", "none");
    $("#3").css("display", "none");
    $("#4").css("display", "none");
  $("#5").css("display", "none");
  $("#6").css("display", "none");
  $("#7").css("display", "none");
  $("#8").css("display", "none");
  $("#2").css("display", "block");
  });
  
  $("#a4").click(function() {
    $("#0").css("display", "none");
    $("#1").css("display", "none");
    $("#2").css("display", "none");
    $("#4").css("display", "none");
  $("#5").css("display", "none");
  $("#6").css("display", "none");
  $("#7").css("display", "none");
  $("#8").css("display", "none");
  $("#3").css("display", "block");
  });
  
  $("#a5").click(function() {
    $("#0").css("display", "none");
    $("#1").css("display", "none");
    $("#2").css("display", "none");
    $("#3").css("display", "none");
  $("#5").css("display", "none");
  $("#6").css("display", "none");
  $("#7").css("display", "none");
  $("#8").css("display", "none");
  $("#4").css("display", "block");
  });
  
  $("#a6").click(function() {
    $("#0").css("display", "none");
    $("#1").css("display", "none");
    $("#2").css("display", "none");
    $("#3").css("display", "none");
  $("#4").css("display", "none");
  $("#8").css("display", "none");
  $("#6").css("display", "none");
  $("#7").css("display", "none");
  $("#5").css("display", "block");
  });
  
  $("#a7").click(function() {
    $("#0").css("display", "none");
    $("#1").css("display", "none");
    $("#8").css("display", "none");
    $("#2").css("display", "none");
    $("#3").css("display", "none");
  $("#4").css("display", "none");
  $("#5").css("display", "none");
  $("#7").css("display", "none");
  $("#6").css("display", "block");
  });
  
  $("#a8").click(function() {
    $("#0").css("display", "none");
    $("#1").css("display", "none");
    $("#2").css("display", "none");
    $("#3").css("display", "none");
  $("#4").css("display", "none");
  $("#5").css("display", "none");
  $("#6").css("display", "none");
  $("#8").css("display", "none");
  $("#7").css("display", "block");
  });

  $("#a9").click(function() {
    $("#0").css("display", "none");
    $("#1").css("display", "none");
    $("#2").css("display", "none");
    $("#3").css("display", "none");
  $("#4").css("display", "none");
  $("#5").css("display", "none");
  $("#6").css("display", "none");
  $("#8").css("display", "block");
  $("#7").css("display", "none");
  });
});
$('#choose-file').inputFileText({
    text: 'CONVERT'
});

function readURL0(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#I01').attr('src', e.target.result).width(280).height(355);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function readURL1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#I11').attr('src', e.target.result).width(270).height(355);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function readURL2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#I21').attr('src', e.target.result).width(270).height(370);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function readURL3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#I31').attr('src', e.target.result).width(305).height(370);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function readURL33(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#I32').attr('src', e.target.result).width(305).height(370);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function readURL4(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#I41').attr('src', e.target.result).width(275).height(355);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function readURL5(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#I51').attr('src', e.target.result).width(305).height(370);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function readURL55(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#I52').attr('src', e.target.result).width(270).height(355);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function readURL6(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#I61').attr('src', e.target.result).width(305).height(370);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function readURL66(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#I62').attr('src', e.target.result).width(305).height(370);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function readURL8(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#I81').attr('src', e.target.result).width(305).height(370);
        };
        reader.readAsDataURL(input.files[0]);
    }
}


  var recorder0= document.getElementById('recorder0');
  var player0 = document.getElementById('player0');

  recorder0.addEventListener('change', function(e) {
    var file = e.target.files[0];
    // Do something with the video file.
    player0.src = URL.createObjectURL(file02);
  
  });
  
  var recorder1 = document.getElementById('recorder1');
  var player1 = document.getElementById('player1');

  recorder1.addEventListener('change', function(e) {
    var file = e.target.files[0];
    // Do something with the video file.
    player1.src = URL.createObjectURL(file);
  
  });
  var recorder2 = document.getElementById('recorder2');
  var player2 = document.getElementById('player2');

  recorder2.addEventListener('change', function(e) {
    var file = e.target.files[0];
    // Do something with the video file.
    player2.src = URL.createObjectURL(file);
  
  });
  var recorder4 = document.getElementById('recorder4');
  var player4 = document.getElementById('player4');

  recorder4.addEventListener('change', function(e) {
    var file = e.target.files[0];
    // Do something with the video file.
    player4.src = URL.createObjectURL(file);
  });

  $("#files").change(function() {
  filename = this.files[0].name
  console.log(filename);
});
</script>

</body>
</html>
