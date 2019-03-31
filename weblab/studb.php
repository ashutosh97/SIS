<?php  
session_start();

	// variable declaration
$username = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";
$password="";
	// connect to database
$db = mysqli_connect('127.0.0.1', 'root', 'ashutosh97', 'webtech');

	// LOGIN USER
if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) {
		$query = "SELECT * FROM regform WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);
		$row = mysqli_fetch_assoc($results);
		if (mysqli_num_rows($results) == 1 && $row['status'] == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: student_panel.php');
		}else { ?>
				<script type="text/javascript">
					alert('Account is not active!');
				</script>
			 <?php
			 
		}
	}
}

?>
