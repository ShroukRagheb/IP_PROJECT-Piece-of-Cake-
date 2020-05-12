<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.btn {
  border: none; /* Remove borders */
  color: white; /* Add a text color */
  padding: 10px 18px; /* Add some padding */
  cursor: pointer; /* Add a pointer cursor on mouse-over */
  font-family: verdana;
  font-size: 120%;
  border-radius: 20px;;
}
.warning {
   background-color:palevioletred;
}
.warning:hover {
   background : white;
   color: palevioletred;
}
h1 {
  color:white;
  font-family: verdana;
  font-size: 400%;
  text-align:center;
  text-shadow: -1px 0 palevioletred, 0 4px palevioletred, 4px 0 palevioletred, 0 -1px palevioletred;
 <!-- align="left|right|center|justify"-->
}
p  {
  color: palevioletred;
  font-family:verdana;
  font-size: 200%;
  text-align:center;
  text-shadow: -1px 0 white, 0 4px white, 4px 0 white, 0 -1px white;
}
body {
  background-image: url("bb2.jpg");
  background-repeat: no-repeat;
  background-position:top;
  background-size:100%;
  background-attachment: scroll;
}

button {
  margin: auto;
  width : 20%;
  position: absolute;
  top:25%;
  left: 40%;
  bottom: 0;
  height: 7%;
}
img{
  position: absolute;;
  left:35%;
  top:37%;
}

</style>

<title>Piece Of Cake</title>
</head>
<body>
</br></br></br></br></br></br>
<h1 ><strong>Piece Of Cake</strong></h1>
<p><b>Turn <ins>Photo you like</ins> into a <ins>photo you love</ins></b></p>
<!--<img src="cover2.jpg" align="middle" width="500" height="200" >-->
</br></br>
<button id="B1" class="btn warning" onClick="window.location='p1.php';" ><b>GET STARTED</b></button>


</body>
</html>
