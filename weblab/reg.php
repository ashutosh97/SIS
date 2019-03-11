<?php
$size1=$_FILES["resupload"]["size"];
$fnm1=$_FILES["resupload"]["name"];
$type1=$_FILES["resupload"]["type"];
$tmp1=$_FILES["resupload"]["tmp_name"];
move_uploaded_file($_FILES["resupload"]["tmp_name"],"uploads/".$_FILES["resupload"]["name"]);
$res_path="uploads/".$fnm1;
$size2=$_FILES["fileupload"]["size"];
$fnm2=$_FILES["fileupload"]["name"];
$type2=$_FILES["fileupload"]["type"];
$tmp2=$_FILES["fileupload"]["tmp_name"];
move_uploaded_file($_FILES["fileupload"]["tmp_name"],"uploads/".$_FILES["fileupload"]["name"]);
$img_path="uploads/".$fnm2;
$unme=$_REQUEST['uname'];
$mail=$_REQUEST['email'];
$pss=$_REQUEST['pass'];
$cnfpss=$_REQUEST['confpass'];
$dg=$_REQUEST['deg'];
$dpt=$_REQUEST['dept'];
$rolln=$_REQUEST['roll'];
$regn=$_REQUEST['reg'];
$sm=$_REQUEST['sem'];
$cgpa=$_REQUEST['cg'];
$yrpss=$_REQUEST['yop'];
$fnme=$_REQUEST['fname'];
$lnme=$_REQUEST['lname'];
$cntct=$_REQUEST['contact'];
$gndr=$_REQUEST['gen'];
$dte=$_REQUEST['date'];
$ag=$_REQUEST['age'];
$adrs=$_REQUEST['addr'];
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("localhost","root","","sis",3306) or die(mysqli_error());
mysqli_select_db($con,"sis") or die("Database not found!!");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $sql="insert into regform(username,email,password,confpassword,degree,dept,rollno,regno,sem,cgpa,yearofpass,res_path,fname,lname,contact,gender,dob,age,address,image_path)values('$unme','$mail','$pss','$cnfpss','$dg','$dpt','$rolln','$regn','$sm','$cgpa','$yrpss','$res_path','$fnme','$lnme','$cntct','$gndr','$dte','$ag','$adrs','$img_path')";
$result=mysqli_query($con,$sql);
	if($result>0)
	{
	echo "</h3>~Entry Uploaded Successfully~</h3>";
	}
	else
	echo "Error";
?> 
