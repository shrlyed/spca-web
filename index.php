<?php
include("include/connection.php");
require_once("include/session.php");

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: dashboard.php");
  exit;
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
          	<li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          	<li><a class="nav-link scrollto" href="#about">About</a></li>
          	<li><a class="nav-link scrollto" href="#team">Team</a></li>
			  <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
			<li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down"></i></a>
				<ul>
					<li><a href="cat_gallery.php">Cats</a></li>
					<li><a href="dog_gallery.php">Dogs</a></li>
				</ul>
			</li>  
          <li><a class="nav-link scrollto" href="enquiry.php">Enquiry</a></li>
		      <li><a class="nav-link scrollto" href="adoption_form.php">Adopt</a></li>
			  <li><a class="nav-link scrollto" href="donation.php">Donate</a></li>
          <li><a class="getstarted scrollto" href="admin_login.php">Admin Login</a></li>
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
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>SPCA SANDAKAN</span></h2>
              <p class="animate__animated animate__fadeInUp">The Society for the Prevention of Cruelty to Animals (SPCA) Sandakan is a non-profit animal welfare organization registered on 27th July 2012.</p>
              <a href="donation.php" class="btn btn-danger">Donate Here</a>
            </div>
          </div>
        </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>About Us</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              The mission and objectives of SPCA Sandakan is to:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Promoting Responsible Pet Ownership</li>
              <li><i class="ri-check-double-line"></i> Lobby For Government Legislation</li>
              <li><i class="ri-check-double-line"></i>  Prevention of Animal Cruelty</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              SPCA started on the April 2012. A group of pet lovers met up for the first time in Brew Cottage Café in Sandakan for the discussion of establishment of the organization. More than 15 people attended the meeting and as a result of this, SPCA Sandakan was born.
              The first General Meeting was held on 4th October 2012. In the meeting it was found that only a few people today who voluntarily engaged in animal protection efforts and many gaps and weaknesses still occur in the SPCA in terms of financial and other material equipment. This means that the SPCA is facing with the problem of material and human resources.
              Despite extremely limited resources, SPCA Sandakan hopes that with generous public assistance and support it can continue to prevent animal abuse.
            </p>
            <!--<a href="#" class="btn-learn-more">Learn More</a>-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3></h3>
          <p> Report An Animal Emergency - Call Our Hotline</p>
          <a class="cta-btn btn-danger" href="tel:012 830 2516">SPCA Sandakan Hotline</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Check our Team</p>
        </div>

        <div class="row">

			<div>
				<center><h4>Chairman</h4>
				<center><p>Ku Chiau Pin</p><br>

				<center><h4>Vice Chairman</h4>
				<center><p>Pang Fui Na</p><br>

				<center><h4>Secretary</h4>
				<center><p>Voo Min Gin</p><br>

				<center><h4>Vice Secretary</h4>
				<center><p>Lim Vui Lin</p><br>

				<center><h4>Treasurer</h4>
				<center><p>Chew Sheng Khong</p><br>

				<center><h4>Committee</h4>
				<center><p>Elsa Thien</p><br>

				<center><h4>Committee</h4>
				<center><p>Eunice Thien</p><br>
			</div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Jalan Lai Fook Kim, Jalan Datuk Tay, 1KM, Mile 8, 90000 Sandakan, Sabah, Malaysia.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>spcasdk@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>Hotline: +6010 227 8911<br>Complaints: +6016 805 1021<br>Fax: +6089 210 485</br></p>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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