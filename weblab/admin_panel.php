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
							<li><a class="gn-icon gn-icon-help">Help</a></li>
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
			<li><a href="#">1</a></li>
			<li><a href="#"><span>2</span></a></li>
			<li><a href="#"><span>3</span></a></li>
			<li><a class="codrops-icon codrops-icon-prev" href="admin_panel.php?logout='1'"><span>logout</span></a></li>
		</ul>
		<header>
			<h1>Admin Panel<span>Welcome admin!!</span></h1>	
		</header> 
	</div><!-- /container -->
	<script src="js/classie.js"></script>
	<script src="js/gnmenu.js"></script>
	<script>
		new gnMenu( document.getElementById( 'gn-menu' ) );
		history.pushState(null, null, location.href);
		window.onpopstate = function () {
			history.go(1);
		};
	</script>
</body>
</html>