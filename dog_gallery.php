<?php
error_reporting(0);
include("include/connection.php");
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

  <!-- Datatable CSS Files -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  	<header id="header" class="fixed-top">
		<div class="container d-flex align-items-center justify-content-between">

		<h1 class="logo"><a href="index.php">SPCA SANDAKAN</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!--<a href="index.php" class="logo"><img src="assets/img/spca_logo.jpg" alt="" class="img-fluid"></a>-->

		<nav id="navbar" class="navbar">
			<ul>
				<li><a class="nav-link scrollto active" href="index.php">Home</a></li>
				<li><a class="nav-link scrollto" href="index.php">About</a></li>
				<li><a class="nav-link scrollto" href="index.php">Team</a></li>
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

  <!-- ======= Content ====== -->
    <div class="row">
        <section>
            <main>
                <div class="card border border-dark d-grid">
                    <div class="card-body">
                        <form action="dog_gallery.php" method="POST">
                            <div class="form-group d-grid pt-2  ">
                                <div class="input-group p-5" style="width: 40%;">
                                    <input type="text" class="form-control" name="valueToSearch" placeholder="search name or ID.." />
									<input type="submit" name="cari" value="Search">
                                <div class="input-group-append">
                            </div>
                        </form><br>
                    </div>
                    <!-- ======= Dog Gallery ======= -->
                    <section id="" class="team section-bg">
                        <div class="container" data-aos="fade-up">
                            <div class="row">
                                <form action="add_dog.php"><div align="right"></div></form>
                                    <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                        <table class="table border border-dark" width="100%" id="myTable" >
                                                <tr>
                                                    <th scope="col">Num</th>
                                                    <th scope="col">Picture</th>
                                                    <th scope="col">Dog ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Age</th>
                                                    <th scope="col">Gender</th>
                                                    <th scope="col">Description</th>
                                                </tr>
                                                     
											<?php 
											$num =1;
											$valueToSearch = $_POST['valueToSearch'];
											if($valueToSearch != ''){
												$query = mysqli_query($conn, "SELECT * FROM dog WHERE name LIKE '".$valueToSearch."' OR id_dog LIKE '".$valueToSearch."'  ");
											}else{
												$query = mysqli_query($conn, "SELECT * FROM dog");	
											}
											if(mysqli_num_rows($query)){
												while($row = mysqli_fetch_array($query)) { 
											?>
												<tr>
													<td><?php echo $num++; ?></td>
													<td> <img style = "width: 175px" src= "assets/img/dog/<?php echo $row['image'] ; ?>"></td>
													<td><?php echo $row['id_dog']; ?></td>
													<td><?php echo $row['name']; ?></td>
													<td><?php echo $row['age']; ?></td>
													<td><?php echo $row['gender']; ?></td>
													<td><?php echo $row['description']; ?></td>
												</tr>
												<?php }}else{
													echo '<tr><td colspan="7">No data found!</td><tr>';
												} ?>  
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
					</section>

                </div>
            </main>
        </section>
    </div><!--======= End Content ====== --!>

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
    </footer>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script>
      $(document).ready( function () {
        $('#myTable').DataTable();
      } );
    </script>


</body>
</html>