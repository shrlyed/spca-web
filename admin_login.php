<?php

include("include/connection.php");
require_once("include/session.php");

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: dashboard.php");
  exit;
}


if (isset($_POST['login'])) {

	$username = stripslashes($_REQUEST['username']);    
	$username = mysqli_real_escape_string($conn, $username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);

	// Check user is exist in the database
	$query    = "SELECT * FROM login WHERE username='".$username."'";

	$result = mysqli_query($conn, $query);

	$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 

	$count = mysqli_num_rows($result);

	if ($count == 1) {

		if(verify_password($row['password'],$_POST['password'])){
			session_regenerate_id();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['username'] = $row['username'];
			$_SESSION['id'] = $row['id_admin'];
			header('Location: '.'dashboard.php');
		}
		else{
			echo "<script>alert('Invalid password!')</script>";
		}
	}
	else{

		$query = "SELECT * FROM login WHERE password ='".$password."'";
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
		$count = mysqli_num_rows($result);
		
		if($count == 1){
	 		echo "<script>alert('Invalid Username!')</script>";
	 	}
	 	else{
	 		echo "<script>alert('Invalid Username and Password!')</script>";
	 	}
	}
} 

function verify_password($db_password,$post_password){
	if($db_password==$post_password){
		return true;
	}
	else{
		return false;
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SPCA Sandakan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

    <script>
		if ( window.history.replaceState ) {
			window.history.replaceState( null, null, window.location.href );
		}
    </script>

</head>

<body>
	<div class=" row mx-auto pt-xl-5 pl-xl-4 full-page-wrapper"  >
		<div class="col-md-4 grid-margin stretch-card mx-auto ">
			<div class="card border border-dark ">
				<div class="card-body justify-content-center">
					<h4 class="card-title">Login Form</h4>
					<form class="forms-sample" action="" method="POST">
						<div class="form-group">
							<label for="">Username</label>
							<input type="username" class="form-control border border-dark" name="username" required/>
						</div>
						<div class="form-group pt-2">
							<label for="">Password</label>
							<input type="password" class="form-control border border-dark" name="password" required/>
						</div>
						<!--<u><small><a href="admin_registration.php" class="text-primary">Register Here</a></small></u>-->
						<div class="d-grid pt-2 gap-2">
							<button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
						</div>
					</form>
				</div>
			</div>
			<center><u><small><a href="index.php" class="text-dark pt-2">Back</a></small></u>
		</div>
	</div>
	<script src="assets/vendor/purecounter/purecounter.js"></script>
  	<script src="assets/vendor/aos/aos.js"></script>
  	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>

</body>
</html>