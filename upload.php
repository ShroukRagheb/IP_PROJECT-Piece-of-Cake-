<html>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>
<style>
.btn {
  border: none; /* Remove borders */
  color: RosyBrown; /* Add a text color */
  cursor: pointer; /* Add a pointer cursor on mouse-over */
  font-family: verdana;
  padding: 12px 16px;
  font-size: 20px;
  border-radius: 20px;
  text-shadow: px 5px darkseagreen;
  margin: auto;
  background-color:sliver;
}
.btn:hover{
   background :Black ;
   color: RosyBrown;
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
  background-size:1700px;
  background-attachment: scroll;
}
button {
  margin: auto;
  position: absolute;
  top:25%;
  left: 30%;
  bottom: 0;
  right: 30%;
  height: 70px;
}
p {
  color: palevioletred;
  font-family:verdana;
  font-size: 200%;
  position:absolute;
  top:20%;
  left:6%;
  bottom: 0;
  right: 1%;
  text-shadow: -1px 0 white, 0 4px white, 4px 0 white, 0 -1px white;
}
</style>
<p>YOUR IMAGE IS SUCCESSFULLY UPLOAD CLICK BUTTON BLEW :</p>
<?php
################################################Cartoon_photo[01_image][02_video]#############################################
if(isset($_POST['Submit01']))
{ 
$name = 'input';
$target_dir = "input/";
$target_file = $target_dir . basename($_FILES["file01"]["name"]); $uploadOk = 1;
$imageFileType = 'jpg';
$target_new_file_name =  $target_dir.$name.".".$imageFileType;
if(move_uploaded_file($_FILES["file01"]["tmp_name"],$target_new_file_name)) 
{
shell_exec("python cartoon_image.py $target_new_file_name");
} 
else 
{
echo "Error !!";
}
}
?>
<?php if (isset($_POST['Submit01'])){?>
<button class="btn home" id="2" onClick="window.location='cartoon.php';"><b>CARTOONIZE IT</b></button><?php }?>
<?php
if(isset($_POST['Submit02']))
{ 
$name = 'input';
$target_dir = "input/";
$target_file = $target_dir . basename($_FILES["file02"]["name"]); $uploadOk = 1;
$imageFileType = 'mp4';
$target_new_file_name =  $target_dir.$name.".".$imageFileType;
if(move_uploaded_file($_FILES["file02"]["tmp_name"],$target_new_file_name)) 
{
shell_exec("python cartoon_video.py $target_new_file_name");
} 
else 
{
echo "Error !!";
}
}
?>
<?php if (isset($_POST['Submit02'])){?>
<button class="btn home" id="2" onClick="window.location='cartoon2.php';"><b>CARTOONIZE IT</b></button><?php }?>


<?php
################################################BNW photo[11_image][12_video]###################################################################
if(isset($_POST['Submit11']))
{ 
$name = 'input';
$target_dir = "input/";
$target_file = $target_dir . basename($_FILES["file11"]["name"]); $uploadOk = 1;
$imageFileType = 'jpg';
$target_new_file_name =  $target_dir.$name.".".$imageFileType;
if(move_uploaded_file($_FILES["file11"]["tmp_name"],$target_new_file_name)) 
{
shell_exec("python Color_To_Black_white_Img.py $target_new_file_name");
} 
else 
{
echo "Error !!";
}
}
?>
<?php if (isset($_POST['Submit11'])){?>
<button class="btn home" id="2" onClick="window.location='cartoon.php';"><b>GET BLACK AND WHITE VERSION</b></button><?php }?>
<?php
if(isset($_POST['Submit12']))
{ 
$name = 'input';
$target_dir = "input/";
$target_file = $target_dir . basename($_FILES["file12"]["name"]); $uploadOk = 1;
$imageFileType = 'mp4';
$target_new_file_name =  $target_dir.$name.".".$imageFileType;
if(move_uploaded_file($_FILES["file12"]["tmp_name"],$target_new_file_name )) 
{
shell_exec("python Color_To_Black_white_video.py $target_new_file_name ");
} 
else 
{
echo "Error !!";
}
}
?>
<?php if (isset($_POST['Submit12'])){?>
<button class="btn home" id="2" onClick="window.location='cartoon2.php';"><b>GET BLACK AND WHITE VERSION</b></button><?php }?>




<?php
###################################COLOTIZE PHOTO photo[21_image][22_video] ##############################################################################
if(isset($_POST['Submit21']))
{ 
$name = 'input';
$target_dir = "input/";
$target_file = $target_dir . basename($_FILES["file21"]["name"]); $uploadOk = 1;
$imageFileType = 'jpg';
$target_new_file_name =  $target_dir.$name.".".$imageFileType;
if(move_uploaded_file($_FILES["file21"]["tmp_name"],$target_new_file_name)) 
{
shell_exec("python Black_White_Img.py $target_new_file_name");
} 
else 
{
echo "Error !!";
}
}
?>
<?php if (isset($_POST['Submit21'])){?>
<button class="btn home" id="2" onClick="window.location='cartoon.php';"><b>COLORIZE IT</b></button><?php }?>
<?php
if(isset($_POST['Submit22']))
{ 
$name = 'input';
$target_dir = "input/";
$target_file = $target_dir . basename($_FILES["file22"]["name"]); $uploadOk = 1;
$imageFileType = 'mp4';
$target_new_file_name =  $target_dir.$name.".".$imageFileType;
if(move_uploaded_file($_FILES["file22"]["tmp_name"],$target_new_file_name)) 
{
shell_exec("python Black_white_video.py $target_new_file_name");
} 
else 
{
echo "Error !!";
}
}
?>
<?php if (isset($_POST['Submit22'])){?>
<button class="btn home" id="2" onClick="window.location='cartoon2.php';"><b>COLORIZE IT</b></button><?php }?>
<?php
##########################################################CHANGE BACKGROUND photo[31_image][32_BG]#######################################################
if(isset($_POST['Submit31']))
{ 
$name = 'input';
$target_dir = "input/";
$target_file = $target_dir . basename($_FILES["file31"]["name"]); $uploadOk = 1;
$imageFileType = 'jpg';
$target_new_file_name =  $target_dir.$name.".".$imageFileType;
$name2 = 'input1';
$target_dir2 = "input/";
$target_file2 = $target_dir2 . basename($_FILES["file32"]["name"]); $uploadOk = 1;
$imageFileType2 = 'jpg';
$target_new_file_name2 =  $target_dir2.$name2.".".$imageFileType2;
if(move_uploaded_file($_FILES["file31"]["tmp_name"],$target_new_file_name)&& move_uploaded_file($_FILES["file32"]["tmp_name"],$target_new_file_name2)) 
{
shell_exec("python Change_back.py $target_new_file_name $target_new_file_name2");


Chat conversation end
Type a message, @name...
