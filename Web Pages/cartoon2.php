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
  top:90%;
  left:33%;
  bottom: 0;
  right: 1%;
  text-shadow: -1px 0 white, 0 4px white, 4px 0 white, 0 -1px white;
}
body {
  background-image: url("bb2.jpg");
  background-repeat: no-repeat;
  background-position:top;
  background-size:1700px;
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
  top:80%;
  left:4%;
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

</head>
<body>
<h1>Video After and Before</h1>
<p1>Click on the wanted video to download it:</p1>
<div class="img-comp-container" style=" background-color:black; height:500px; width:660px; position:absolute; top:20%; bottom:0; left:10%; right:8%;">>
  <div class="img-comp-img" style=" background-color:white; height:453px; width:605px; position:absolute; top:5%; bottom:0; left:4%; right:80%;">
    <a href="output.mp4" download>
    <video src="output.mp4" width="600" height="450" controls></video>
	</a>
  </div>
  </div>
  <div class="img-comp-container" style=" background-color:black; height:500px; width:660px; position:absolute; top:20%; bottom:0; left:50%; right:8%;">
  <div class="img-comp-img" style=" background-color:white; height:453px; width:605px; position:absolute; top:5%; bottom:0; left:4%; right:6%;">
    <a href="input/input.mp4" download>
    <video src="input/input.mp4" width="600" height="450" controls></video>
    </a>
  </div>
</div>
<button class="btn back" onClick="window.location='p1.php';"><i class="fa fa-back"></i><b>BACK</b></button>
<!--<a class="btn download"href="cartoon/shosh.jpg"><i class="fa fa-download"></i>Download</a>-->



</body>
</html>
