<?php

include("include/connection.php");

$query = "SELECT * FROM dog";

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

  <style>
	.my-custom-scrollbar {
	position: relative;
	height: 600px;
	overflow: auto;
	}
	.table-wrapper-scroll-y {
	display: block;
	}
  </style>

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

	<!-- ======= List of dog ======= -->
	<section id="team" class="team section-bg">
		<div class="container" data-aos="fade-up">
			<div class="row">

				<form action="add_dog.php"><div align="right"><button class="btn btn-success mb-2">Add New Dog</button></div></form>
					<div class="table-wrapper-scroll-y my-custom-scrollbar">
						<table class="table border border-dark" width="50%" >
							<thead class="thead-secondary">
								<tr>
									<th scope="col">Num</th>
									<th scope="col">Picture</th>
									<th scope="col">Dog ID</th>
									<th scope="col">Name</th>
									<th scope="col">Age</th>
									<th scope="col">Gender</th>
									<th scope="col">Description</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
							<!-- fetched data from dog table -->
							<?php 
							$num =1;
							while($row = mysqli_fetch_assoc($result)) { ?>
								<tr>
									<td><?php echo $num; ?></td>
									<td> <img style = "width: 50px" src= "assets/img/dog/<?php echo $row['image'] ; ?>"></td>
									<td><?php echo $row['id_dog']; ?></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['age']; ?></td>
									<td><?php echo $row['gender']; ?></td>
									<td><?php echo $row['description']; ?></td>
									<td>
										<a href="edit_dog.php?id_dog=<?php echo $row['id_dog']; ?>"><button class="btn btn-primary">Edit</button></a>
										<a href="delete_dog.php?id_dog=<?php echo $row['id_dog']; ?>" onclick="return confirm('Are you sure to delete this?')"><button class="btn btn-danger">Delete</button></a>
									</td>
								</tr>
								<?php $num++;
								} ?>  
							</tbody>
						</table>
					</div>
				</form>
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