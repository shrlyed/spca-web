<?php
include("include/connection.php");

 if(isset($_POST['enquiry'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $query = "INSERT INTO enquiry (name, email, subject, message)
                VALUES ('$name','$email','$subject','$message')";
    
    if(mysqli_query($conn, $query)){

        echo "<script>alert('Your message has been sent!')</script>";
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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">SPCA SANDAKAN</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
     <!-- <a href="index.php" class="logo"><img src="assets/img/spca_logo.jpg" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          	<li><a class="nav-link" href="index.php">Home</a></li>
          	<li><a class="nav-link" href="index.phpabout">About</a></li>
          	<li><a class="nav-link" href="index.php">Team</a></li>
              <li><a class="nav-link" href="index.php">Contact Us</a></li>
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

    <div class="pt-xl-5 pl-xl-4">
        <section id="" class=" section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="row justify-content-center">

                        <div class="col-lg-6">
                            <form action="enquiry.php" method="POST" >
                            <div class="row">
                                <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control"  placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div><br>
                            <div class="text-center"><button type="submit" class="btn btn-primary" name="enquiry">Send Message</button></div>
                            </form>
                        </div>

                    </div>
                </div>
        </section>
    </div>


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