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
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
	<script src="js/modernizr.custom.js"></script>
</head>
<style>

body{
  background:#000;
}
section.awSlider .carousel{
	display:table;
	z-index:2;
	-moz-box-shadow: 0 0 4px #444;
	-webkit-box-shadow: 0 0 4px #444;
	box-shadow: 0 0 15px rgba(1,1,1,.5);
}

section.awSlider{
	margin:30px auto;
	padding:30px;
	position:relative;
	display:table;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

section.awSlider:hover > img{
	-ms-transform: scale(1.2);
	-webkit-transform: scale(1.2);
	transform: scale(1.2);
	opacity:1;
}

section.awSlider img{
	pointer-events: none;
}

section.awSlider > img{
	position:absolute;
	top:30px;
	z-index:1;
	transition:all .3s;
	filter: blur(1.8vw);
	-webkit-filter: blur(2vw);
	-moz-filter: blur(2vw); 
	-o-filter: blur(2vw); 
	-ms-filter: blur(2vw);
	-ms-transform: scale(1.1);
	-webkit-transform: scale(1.1);
	transform: scale(1.1);
	opacity:.5;
}

.item img{
	height:50vh;
	width:50vw;
}
</style>
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
			<li><a href="student_login.php">User Login</a></li>
			<li><a href="admin_login.php"><span>Admin Login</span></a></li>
			<li><a href="register.php"><span>Register</span></a></li>
			<li><a class="codrops-icon codrops-icon-prev" href="index.php"><span>Back to Home Page</span></a></li>
		</ul>
		<header>
			<h1>Student Information System<span>Information of all students at one place!</span></h1>	
			<section class="awSlider">
				<div  class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target=".carousel" data-slide-to="0" class="active"></li>
						<li data-target=".carousel" data-slide-to="1"></li>
						<li data-target=".carousel" data-slide-to="2"></li>
						<li data-target=".carousel" data-slide-to="3"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="nit.jpg">
						</div>
						<div class="item">
							<img src="sis.png">
						</div>
						<div class="item">
							<img src="nit2.jpg">
						</div>
						<div class="item">
							<img src="sis2.png">
						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Geri</span>
					</a>
					<a class="right carousel-control" href=".carousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">İleri</span>
					</a>
				</div>
			</section>

		</header> 
	</div><!-- /container -->
	<script src="js/classie.js"></script>
	<script src="js/gnmenu.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
	<script>
		new gnMenu( document.getElementById( 'gn-menu' ) );
		$("section.awSlider .carousel").carousel({
			pause: "hover",
			interval: 2000
		});

		var startImage = $("section.awSlider .item.active > img").attr("src");
		$("section.awSlider").append('<img src="' + startImage + '">');

		$("section.awSlider .carousel").on("slid.bs.carousel", function() {
			var bscn = $(this)
			.find(".item.active > img")
			.attr("src");
			$("section.awSlider > img").attr("src", bscn);
		});

/* 
Philips ambilight tv
Üzerine gleince duruyor slide
*/

</script>
</body>
</html>