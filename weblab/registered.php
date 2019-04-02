<?php 
session_start(); 

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: admin_login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: admin_login.php");
}

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<style>
.reg
{
width:600px;
border-radius: 25px;
height:auto;
background-color:#CCCCCC;
float:left;
box-shadow: 5px 5px 5px white;
word-spacing:15px;
line-height: 1.6;
}
.ff
{
padding-left:40px;
}
</style>
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
                                <li><a href="registered.php">Registered</a></li>
				<li><a href="activated.php"><span>Activated</span></a></li>
                                <li><a href="rejected.php"><span>Rejected</span></a></li>
								<li><a href="view.php"><span>View</span></a></li>
				<li><a class="codrops-icon codrops-icon-prev" href="admin_panel.php?logout='1'"><span>logout</span></a></li>
			</ul>
			<header>
		<font class="ff" face="Algerian" size="+3" color="#FFFFFF">:LIST OF REGISTERED STUDENTS:</font>
		<br></br>
		<br></br>
			<div class="reg">
			<table width="500" align="center">
			<tr>
    <td><font face="Cambria"  color="#000000" size="6"><u>USERNAME:</u></font></td>
    <td><font face="Cambria" color="#000000" size="6"><u>REG_NO:</u></font></td>
  </tr>
			<?php
			$con= mysqli_connect('127.0.0.1', 'root', 'ashutosh97', 'webtech') or die(mysqli_error($con));
  			mysqli_select_db($con,"webtech")or die("Database not found!!");
  			$s="select * from regform";
  			$result=mysqli_query($con,$s) or die(mysqli_error());
  			while($row=mysqli_fetch_assoc($result))
  			{ 
			?>
			<tr>
			<td><font face="Cambria" color="e15119" size="5"><?php echo $row["username"]; ?></font></td>
    		<td><font face="Cambria" color="e15119" size="5"><?php echo $row["regno"]; ?></font></td>
			<?php } ?>
			</tr>
			</table>
			</div><!-- registered -->
			</header> 
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
