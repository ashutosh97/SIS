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

		input[type=text], select {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
       }
	    input[type=submit] {
      width: 50%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    input[type=submit]:hover {
      background-color: #45a049;
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
			<h2>Enter the username of student whose details you want to see:</h2>	
			<form action="std_det.php" method="post" enctype="multipart/form-data">
                                        <p><input type="text" id="user" name="user" placeholder="Username" required></p>
										<p><input type="submit" name="std" value="View"></p>
                                </form>
			</header> 
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
