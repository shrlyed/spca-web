<?php
include("include/connection.php");

if(isset($_POST['adopt'])){
	$name = $_POST['name'];
	$nric = $_POST['nric'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$phone_num = $_POST['phone_num'];
	$animal_name = $_POST['animal_name'];
	$animal_id = $_POST['animal_id'];
	$vax_neuter = $_POST['vax_neuter'];
	$surrender = $_POST['surrender'];
	$inspectoration = $_POST['inspectoration'];
	$adopt_date = date('Y-m-d');

	$query = "INSERT INTO adoption (name, nric, address, email, phone_num, animal_name, 
				animal_id, vax_neuter, surrender, inspectoration, adopt_date)
				VALUES ('$name', '$nric', '$address', '$email', '$phone_num', 
				'$animal_name', '$animal_id', '$vax_neuter', '$surrender', '$inspectoration', '$adopt_date' )";

	if(mysqli_query($conn, $query)){

		echo "<script>alert('Your adoption request has been sent!')</script>";
		
	}else{
		mysqli_error($conn);
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
				<h4 class="card-title">Adoption Agreement Form</h4>
				<p class="card-description"></p>
				<form action="adoption_form.php" method="POST">
					<div class="form-group">
						<label for="">Full Name</label>
						<input type="text" class="form-control border border-dark" name="name" required/>
					</div>
					<div class="form-group">
						<label for="">NRIC Number</label>
						<input type="text" class="form-control border border-dark" name="nric" required/>
					</div>
					<div class="form-group ">
						<label for="">Address</label>
						<input type="text" class="form-control border border-dark" name="address" required/>
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="email" class="form-control border border-dark" name="email" required/>
					</div>
					<div class="form-group">
						<label for="">Phone Number</label>
						<input type="text" class="form-control border border-dark" name="phone_num" required/>
					</div>
					<div class="form-group">
						<label for="">Animal Name</label>
						<input type="text" class="form-control border border-dark" name="animal_name" required/>
					</div>
					<div class="form-group">
						<label for="">Animal ID</label>
						<input type="text" class="form-control border border-dark" name="animal_id" required/>
					</div>
					<div class="form-group">
						<label for="">Are you willing to cover the cost of vaccination/neuter the animal?</label>
							<select class="form-control form-control-md" id="" name="vax_neuter">
								<option value="yes">Yes</option>
								<option value="no">No</option>
							</select>
					</div>
					<div class="form-group pt-2 d-grid">
						<label for="">Do you agree to inform SPCA KK first should you decide to give up the adopted animal later on due to unforeseen circumstances?</label>
							<select class="form-control form-control-md" id="" name="surrender">
								<option value="yes">Yes</option>
								<option value="no">No</option>
							</select>
					</div>
					<div class="form-group pt-2 d-grid">
                    	<label for="">Do you agree to SPCA KK Inspectorate Officer visiting your home before / after adoption?</label>
							<select class="form-control form-control-md" id="" name="inspectoration">
								<option value="yes">Yes</option>
								<option value="no">No</option>
							</select>
					</div>
					<center><div class="form-check form-check-flat form-check-primary pt-2 d-grid">
					<center><label class="form-check-label">
						<input type="checkbox" class="form-check-input" name="checkbox" value="check"/> I certify that the above information is true and correct and agree to abide by it. </label>
                    </div>
					<div class="d-grid pt-2 gap-2">
						<button type="submit" class="btn btn-primary btn-block" name="adopt" onclick="if(!this.form.checkbox.checked){alert('You must agree the term first!.'); return false}">Adopt</button>
					</div>
				</form>
					<div class="d-grid pt-2 gap-2">
						<center><u><a href="index.php" class="text-primary">Back</a></u>
					</div>
			</div>
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

	<script>
		 if(!this.form.checkbox.checked)
			{
				alert('You must agree to the terms first.');
				return false;
			}
	</script>
</body>
</html>