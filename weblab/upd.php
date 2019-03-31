<?php 
session_start(); 

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: student_login.php');
}


?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Student Information System</title>
	<meta name="description" content="Information of all students at one place!" />
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr.custom.js"></script>
</head>
<body>
	<div class="container">
		<ul id="gn-menu" class="gn-menu-main">
			<li class="gn-trigger">
				<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
				<nav class="gn-menu-wrapper">
					<div class="gn-scroller">
						<ul class="gn-menu">
							<li class="gn-search-item">
								<input placeholder="Search" type="search" class="gn-search">
								<a class="gn-icon gn-icon-search"><span>Search</span></a>
							</li>
							<li><a href="contact_us.php" class="gn-icon gn-icon-cog">Contact Us</a></li>
							<li><a href="help.php" class="gn-icon gn-icon-help">Help</a></li>
							<li>
								<a class="gn-icon gn-icon-archive">Archives</a>
								<ul class="gn-submenu">
									<li><a class="gn-icon gn-icon-article">Articles</a></li>
									<li><a class="gn-icon gn-icon-pictures">Images</a></li>
									<li><a class="gn-icon gn-icon-videos">Videos</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /gn-scroller -->
				</nav>
			</li>   
			<li><a href="student_login.php">User Login</a></li>
			<li><a href="admin_login.php"><span>Admin Login</span></a></li>
			<li><a href="register.php"><span>Register</span></a></li>
			<li><a class="codrops-icon codrops-icon-prev" href="index.php"><span>Back to Home Page</span></a></li>
		</ul>
		<header>
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
			$mail=$_REQUEST['email'];
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
			$con = mysqli_connect("127.0.0.1","root","ashutosh97","webtech") or die(mysqli_error());
			mysqli_select_db($con,"webtech") or die("Database not found!!");
// Check connection
			$user = $_SESSION['username'] ;
			$oldsql = 	"select * from regform where username='$user'";
			$oldresult = mysqli_query($con, $oldsql);
			$row = mysqli_fetch_assoc($oldresult);
			if(empty($fnm1)){
				$res_path = $row ['res_path'];
			}
			if(empty($fnm2)){
				$img_path = $row ['image_path'];
			}
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			$sql="update regform set email='$mail',degree='$dg',dept='$dpt',rollno='$rolln',regno='$regn',sem='$sm',cgpa='$cgpa',yearofpass='$yrpss',res_path='$res_path',fname='$fnme',lname='$lnme',contact='$cntct',gender='$gndr',dob='$dte',age='$ag',address='$adrs',image_path='$img_path',status='0' where username='$user'";
			$result=mysqli_query($con,$sql);
			if($result>0)
			{
				echo "<h1>Entry Updated Successfully!!<span>Waiting for activation by the admin...</span></h1>";
				session_destroy();
				unset($_SESSION['username']);
			}
			else{
				die('Failed to update the entry. The following is the issue:<br><br>'.mysqli_error($con));
			}	
			
			?> 
		</header> 
	</div><!-- /container -->
	<script src="js/classie.js"></script>
	<script src="js/gnmenu.js"></script>
	<script>
		new gnMenu( document.getElementById( 'gn-menu' ) );
	</script>
</body>
</html>