<?php
include("include/connection.php");
require_once("include/session.php");

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("Location: admin_login.php");
  exit();
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

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">SPCA SANDAKAN</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
     <!-- <a href="index.php" class="logo"><img src="assets/img/spca_logo.jpg" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          	<li><a class="nav-link scrollto active" href="#hero">Dashboard</a></li>
			<li><a class="nav-link scrollto" href="list_of_enquiry.php">Enquiries</a></li>
			<li class="dropdown"><a href="#"><span>List of Animals</span> <i class="bi bi-chevron-down"></i></a>
				<ul>
					<li><a href="list_of_cats.php">Cats</a></li>
					<li><a href="list_of_dogs.php">Dogs</a></li>
				</ul>
			</li>  
          <li><a class="nav-link scrollto" href="list_of_adoptions.php">List of Adoption</a></li>
          <li><a class="getstarted scrollto" href="admin_logout.php">Admin Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

   <!-- ======= Hero Section ======= -->
   <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/dog/main_photo.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">This is <span>Admin site</span></h2>
              <p class="animate__animated animate__fadeInUp">The Society for the Prevention of Cruelty to Animals (SPCA) Sandakan is a non-profit animal welfare organization registered on 27th July 2012.</p>
            </div>
          </div>
        </div>
    </div>
  </section><!-- End Hero -->

	<!-- ======= Dashboard ======= -->
	<section id="services" class="services">
      	<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>Dashboard</h2>
				<p></p>
			</div>

			<div class="row">
			<div class="col-lg-4 col-md-6 d-flex align-items-stretch " data-aos="zoom-in" data-aos-delay="100">
				<div class="icon-box">
					<div class=""></div>
					<h4>Total of Cats</h4>
					<?php 
						$query = "SELECT id_cat FROM cat ORDER BY id_cat";
						$result = mysqli_query($conn, $query);

						$row = mysqli_num_rows($result);

							echo '<h3>'.$row.'</h3>';
						?>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 " data-aos="zoom-in" data-aos-delay="200">
				<div class="icon-box">
					<div class=""></div>
					<h4>Total of Dogs</h4>
					<?php 
						$query = "SELECT id_dog FROM dog ORDER BY id_dog";
						$result = mysqli_query($conn, $query);

						$row = mysqli_num_rows($result);

							echo '<h3>'.$row.'</h3>';
						?>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 " data-aos="zoom-in" data-aos-delay="300">
				<div class="icon-box">
					<div class=""></div>
					<h4>Total of Adoption Approval</h4>
					<?php 
						$query = "SELECT id_adoption FROM adoption ORDER BY id_adoption";
						$result = mysqli_query($conn, $query);

						$row = mysqli_num_rows($result);

							echo '<h3>'.$row.'</h3>';
						?>
				</div>
			</div>

			

		</div>
	</section><!-- End Dashboard Section -->
  

  <!-- ======= Footer ======= -->
	<footer id="footer">
    <div class="footer-top">
      	<div class="container">
        	<div class="row">
          		<center><div class="col-lg-4 col-md-6">
            	<div class="footer-info">
					<h3>SPCA Sandakan</h3>
					<p class="pb-3"><em>We speak for those who cannot speak for themselves.</em></p>
					<p>
					Jalan Lai Fook Kim, Jalan Datuk Tay, <br>
					1KM, Mile 8, 90000 Sandakan, Sabah, Malaysia.<br><br>
						<strong>Phone:</strong> +6010 227 8911<br>
						<strong>Email:</strong> spcasdk@gmail.com<br>
							</p>
					<div class="social-links mt-3">
						<a href="https://www.facebook.com/SpcaSandakan" class="facebook"><i class="bx bxl-facebook"></i></a>
						<a href="https://www.instagram.com/spcasdk/?hl=en" class="instagram"><i class="bx bxl-instagram"></i></a>
					</div>
            	</div>
			</div>
      	</div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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