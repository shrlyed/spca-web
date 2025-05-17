<?php

include("include/connection.php");

$query = "SELECT * FROM adoption";

$result = mysqli_query($conn, $query);

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
   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="dashboard.php">SPCA SANDAKAN</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
     <!-- <a href="index.php" class="logo"><img src="assets/img/spca_logo.jpg" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          	<li><a class="nav-link scrollto active" href="dashboard.php">Dashboard</a></li>
			<li><a class="nav-link scrollto" href="list_of_enquiry.php">Enquiries</a></li>
			<li class="dropdown"><a href="#"><span>List of Animals</span> <i class="bi bi-chevron-down"></i></a>
				<ul>
					<li><a href="list_of_cats.php">Cats</a></li>
					<li><a href="list_of_dogs.php">Dogs</a></li>
				</ul>
			</li>  
          <li><a class="nav-link scrollto" href="list_of_adoptions.php">List of Adoption</a></li>
          <li><a class="getstarted scrollto" href="index.php">Admin Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>

	<!-- ======= list of adoption ======= -->
	<section id="team" class="team section-bg">
		<div class="container" data-aos="fade-up">
			<div class="row">
				
					<!-- select date -->
					<form method = "post">
						<div>
							<label>Select Start Date:</label>
							<input type="date" name="dt" id="dt" required>

							<label>Select End Date:</label>
							<input type="date" name="dt2" id="dt2" required>

							<button onclick="document.getElementById('dt', 'dt2').value = ''" class="btn btn-danger">Clear Date</button>

							<div align ="right">
								<button type="submit" name="submit1" value="" class="btn btn-primary mb-4">Generate Report</button><br>
							</div>
						</div>
					</form>
            		<!-- end select date -->
					<!-- generate report according to selected date -->
					<?php
					if(isset($_POST["submit1"]))
					{
						?>
						<!-- start table result -->
						<div style="overflow-y:scroll;height: 600px;">
							
							<table class="table border border-dark" id="table">
								<thead class="thead-secondary">
									<tr>
										<th scope="col">Name</th>
										<th scope="col">NRIC No</th>
										<th scope="col">Address</th>
										<th scope="col">Email</th>
										<th scope="col">Phone Number</th>
										<th scope="col">Animal Name</th>
										<th scope="col">Animal ID</th>
										<th scope="col">Vaccine/Neuter</th>
										<th scope="col">Inform SPCA for Surrender</th>
										<th scope="col">House Inspectoration</th>
										<th scope="col">Adopt Date</th>
									</tr>
								</thead>
								<tbody>
									<!-- fetched data from adoption table -->
									<?php
									$result = mysqli_query($conn, "SELECT * FROM adoption WHERE (adopt_date>='$_POST[dt]' && adopt_date<='$_POST[dt2]')" );
									while($row = mysqli_fetch_assoc($result))
									{
									?>
									<tr>
										<td><?php echo $row['name']; ?></td>
										<td><?php echo $row['nric']; ?></td>
										<td><?php echo $row['address']; ?></td>
										<td><?php echo $row['email']; ?></td>
										<td><?php echo $row['phone_num']; ?></td>
										<td><?php echo $row['animal_name']; ?></td>
										<td><?php echo $row['animal_id']; ?></td>
										<td><?php echo $row['vax_neuter']; ?></td>
										<td><?php echo $row['surrender']; ?></td>
										<td><?php echo $row['inspectoration']; ?></td>
										<td><?php echo $row['adopt_date']; ?></td>
									</tr>
									<?php 
									}?>
								</tbody>
							</table>
						</div>
						<?php
						}
						else
						{
						?>
						<br>
						<div style="overflow-y:scroll;height: 600px;">
							<!-- table 2 -->
							<table class="table border border-dark" id="table">
									<thead class="thead-secondary">
										<tr>
											<th scope="col">Name</th>
											<th scope="col">NRIC No</th>
											<th scope="col">Address</th>
											<th scope="col">Email</th>
											<th scope="col">Phone Number</th>
											<th scope="col">Animal Name</th>
											<th scope="col">Animal ID</th>
											<th scope="col">Vaccine/Neuter</th>
											<th scope="col">Inform SPCA for Surrender</th>
											<th scope="col">House Inspectoration</th>
											<th scope="col">Adopt Date</th>
										</tr>
									</thead>
									<tbody>
									<?php 
										$result = mysqli_query($conn, "SELECT * FROM adoption");
										while($row = mysqli_fetch_array($result))
										{
										?>
										<tr>
											<td><?php echo $row['name']; ?></td>
											<td><?php echo $row['nric']; ?></td>
											<td><?php echo $row['address']; ?></td>
											<td><?php echo $row['email']; ?></td>
											<td><?php echo $row['phone_num']; ?></td>
											<td><?php echo $row['animal_name']; ?></td>
											<td><?php echo $row['animal_id']; ?></td>
											<td><?php echo $row['vax_neuter']; ?></td>
											<td><?php echo $row['surrender']; ?></td>
											<td><?php echo $row['inspectoration']; ?></td>
											<td><?php echo $row['adopt_date']; ?></td>
										</tr>
										<?php 
										} ?>
									</tbody>
								</table>
						</div>
						<!-- end of table result -->
						<?php
					}
					?>
			</div>
		</div>
	</section>

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