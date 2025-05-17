<?php
include("include/connection.php");

if(isset($_POST['add'])) {

	//Process the image that is uploaded by the user
	$image = $_FILES['image']['name'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$description = $_POST['description'];
	$target_dir = "assets/img/cat/";
	$target_file = $target_dir.basename($_FILES["image"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

	//storind the data in your database
	$query = "INSERT INTO cat(image, name, age, gender, description) VALUES('$image', '$name', '$age', '$gender', '$description') ;";
	$result = mysqli_query($conn, $query);
	if(!$result){
		die ("Query error: ".mysqli_errno($conn).
			" - ".mysqli_error($conn));
	} else {
		echo "<script>alert('New cat has been added.');window.location='list_of_cats.php';</script>";
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
	<div class="row ">
		<div class="col-md-6 pt-xl-5 pl-xl-4  grid-margin stretch-card mx-auto">
			<div class="card border border-secondary">
				<div class="card-body">
					<h4 class="card-title">Add new cat</h4>
					<form action="add_cat.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="">Picture</label><br>
							<input type="file" class="form-control" name="image" required/>
						</div>
						<div class="form-group">
							<label for="">Name</label>
							<input type="text" class="form-control border border-dark" name="name" required/>
						</div>
						<div class="form-group">
							<label for="">Age</label>
							<input type="text" class="form-control border border-dark" name="age" required/>
						</div>
						<div class="form-group">
							<label for="">Gender</label>
							<select class="form-control border border-dark" name="gender">
									<option value="Female">Female</option>
									<option value="Male">Male</option>
							</select>
						</div>
						<div class="form-group">
							<label for="">Description</label>
							<textarea class="form-control border border-dark"  rows="3" name="description"></textarea>
						</div>
						<div class="d-grid pt-2 gap-2">
							<button type="submit" class="btn btn-success btn-block" name="add">Add</button>
						</div><br>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div align="center" class="pt-xl-5 pl-xl-4"><a href="list_of_cats.php"><button type="button" class="btn btn-secondary btn-block" name="add">Back</button></a></div>

 	 <!-- Vendor JS Files -->
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