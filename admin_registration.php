<?php
include("include/connection.php");

 // When form submitted, insert values into the database.
 if (isset($_POST['register'])) {
	// removes backslashes
	$username = stripslashes($_POST['username']);
	//escapes special characters in a string
	$username = mysqli_real_escape_string($conn, $username);
	$email    = stripslashes($_POST['email']);
	$email    = mysqli_real_escape_string($conn, $email);
	$password = stripslashes($_POST['password']);
	$password = mysqli_real_escape_string($conn, $password);

	$query    = "INSERT into `registration` (username, email, password)
					VALUES ('$username', '$email', '".md5($password)."');";

	$result   = mysqli_query($conn, $query);

	if ($result) {
		echo '<script>alert("You are successfully registered!")</script>';
	} else {
		echo mysqli_error($conn);
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
<div class="row justify-content">
<div class=" row mx-auto pt-xl-5 pl-xl-4 full-page-wrapper"  >
		<div class="col-md-4 grid-margin stretch-card mx-auto ">
			<div class="card border border-dark ">
				<div class="card-body justify-content-center">
					<h4 class="card-title">Registration Form</h4>
					<form class="forms-sample" action="admin_login.php" method="POST">
						<div class="form-group">
							<label for="">Username</label>
							<input type="text" class="form-control border border-dark" name="username" value=""  required/>
						</div>
						<div class="form-group">
							<label for="">Email address</label>
							<input type="email" class="form-control border border-dark" name="email" value=""  required/>
						</div>
						<div class="form-group pt-2">
							<label for="">Password</label>
							<input type="password" class="form-control border border-dark" name="password" value="" required/>
						</div>
						<u><small><a href="admin_login.php" class="text-primary">Login Here</a></small></u>
						<div class="d-grid pt-2 gap-2">
							<button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
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