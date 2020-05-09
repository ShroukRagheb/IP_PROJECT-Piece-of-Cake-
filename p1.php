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
   top:94%;
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
