<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin</title>
    <link rel="stylesheet" href="assets/vendor/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendor/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendor/css1/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assets/vendor/select2/select2.min.css" />
    <link rel="stylesheet" href="assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css1/style.css" />
    <link rel="shortcut icon" href="assets/img/spca_logo.jpg" />

  </head>
  <body>
    <div class="container-scroller">
      	<nav class="sidebar sidebar-offcanvas" id="sidebar">
			<div class="text-center sidebar-brand-wrapper d-flex align-items-center">
				<a class="sidebar-brand brand-logo" href="index.html"><img src="assets/img/spca_logo.jpg" alt="logo" /></a>
				<a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="assets/img/logo-mini.svg" alt="logo" /></a>
			</div>
			<ul class="nav">
				<li class="nav-item nav-profile">
					<a href="#" class="nav-link">
						<div class="nav-profile-image">
							<img src="assets/img/faces/face1.jpg" alt="profile" />
						</div>
						<div class="nav-profile-text d-flex flex-column pr-3">
							<span class="font-weight-medium mb-2">SPCA SDK Admin</span>
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="dashboard.php">
					<i class="mdi mdi-home menu-icon"></i>
					<span class="menu-title">Dashboard</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="list_of_adoptions.php">
					<i class="mdi mdi-account menu-icon"></i>
					<span class="menu-title">List of Adoptions</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="list_of_cats.php">
					<i class="mdi mdi-cat menu-icon"></i>
					<span class="menu-title">Cats</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="list_of_dogs.php">
					<i class="mdi mdi-dog menu-icon"></i>
					<span class="menu-title">Dogs</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="user_profile.php">
					<i class="mdi mdi-face menu-icon"></i>
					<span class="menu-title">Adopter Personal Info</span>
					</a>
				</li>
			</ul>
      	</nav>
      	<div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="assets/img/logo-mini.svg" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                  <img class="nav-profile-img mr-2" alt="" src="assets/img/faces/face1.jpg" />
                  <span class="profile-name">SPCA SDK Admin</span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-logout mr-2 text-primary"></i> Logout </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
			<!-- === Content starts here === -->	
                <div class="table-responsive">
                    <table id="cat_table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr class="bg-secondary">
                                <th>No.</th>
                                <th>Fullname</th>
                                <th>Email</th>
                                <th>NRIC</th>
                                <th>Phone Number</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Occupation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>johndoe@gmail.com</td>
                                <td>986467127632</td>
                                <td>0123456789</td>
                                <td>Male</td>
                                <td>Kota Samarahan,Sarawak</td>
                                <td>Teacher</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>	<!-- === Content ends here === -->
           
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"></span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <a href="" target="_blank"></a> </span>
            </div>
          </footer>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <script src="assets/vendor/js/vendor.bundle.base.js"></script>
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="assets/vendor/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/file-upload.js"></script>
    <script src="assets/js/typeahead.js"></script>
    <script src="assets/js/select2.js"></script>

  </body>
</html>