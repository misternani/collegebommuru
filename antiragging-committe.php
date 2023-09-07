<?php
session_start();
include_once 'dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


  <title>Dr.B.R.A.Govt.Model Residential Polytechnic Bommuru Rajahmundry</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/b326878e6f.js" crossorigin="anonymous"></script>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php"><img src="img/polylogo.jpg"></a></h1>
    

    <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php" style="color: black;" ><i class="fa-solid fa-house" style="color: rgb(12, 188, 135);font-size: 15px;"></i>&nbsp; Home</a></li>
          <li class="dropdown"><a href="#"><span><i class="fa-solid fa-building" style="color: red;font-size: 15px;"></i>&nbsp; About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="vision-mission.php">Vision and Mission</a></li>
              <li><a href="aim-objectives.php">Aims & Objectives</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="goals.php">Goals</a></li>
              <li><a href="hallmarks.php">Hall Marks</a></li>
              <li><a href="principals-message.php">Principals Message</a></li>
              <li><a href="alumni.php">Alumni</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span><i class="fa-solid fa-landmark" style="color: rgb(255, 204, 0);font-size: 15px;"></i>&nbsp; Departments</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="cse.php">Computer Engineering</a></li>
              <li><a href="ece.php">Electronic & Communication Engineering</a></li>
              <li><a href="mech.php">Mechanical Engineering</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span><i class="fa-solid fa-graduation-cap" style="color: rgb(255, 106, 0);font-size: 15px;"></i>&nbsp; Academics</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="academics.php">Academics</a></li>
              <li><a href="admissions.php">Admissions</a></li>
              <li><a href="examinations.php">Examinations</a></li>
              <li><a href="fee-structure.php">Fee Structure</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span><i class="fa-solid fa-users" style="color: rgb(0, 89, 255);font-size: 15px;"></i>&nbsp; Committes</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
             <li><a href="academic-council.php">Academic Council</a></li>
              <li><a href="financial-committe.php">Financial Committe</a></li>
              <li><a href="grievance.php">Grievance Redressal Cell</a></li>
              <li><a href="antiragging-squad.php">Anti Ragging Squad</a></li>
              <li><a href="antiragging-committe.php">Anti Ragging Committe</a></li>
              <li><a href="internalcomplaints-committe.php">Internal Complaints Committe</a></li>
              <li><a href="scst-committe.php">SC/ST Committe</a></li>
              <li><a href="student-counsellors.php">Student Counsellors</a></li>
              <li><a href="purchase-committe.php">Purchase Committe</a></li>
              <li><a href="institution-industrycell.php">Institution Industry Cell</a></li>
            
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span><i class="fa-brands fa-blogger" style="color: rgb(255, 170, 0);font-size: 16px;"></i>&nbsp; Blog</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="gallery.php">Downloads</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="gallery.php">Gallery</a></li>
            
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span><i class="fa-solid fa-square-caret-down" style="color: rgb(0, 98, 255);font-size: 16px;"></i>&nbsp; Others</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="commissioner.php">Commissioner</a></li>
              <li><a href="placements.php">Placements</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="aicte-eoa.php">AICTE EOA LIST</a></li>
              <li><a href="polygrievance-app.php">AP GRIEVANCE APP</a></li>
              <li><a href="mandatory-disclosure.php">Mandatory Disclosure</a></li>
              <li><a href="polycet.php">POLYCET</a></li>
              <li><a href="polycet-information.php">Polycet Information</a></li>
              <li><a href="polycet-material.php">Polycet Material</a></li>
            
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="contact.php"><i class="fa-solid fa-address-card" style="color: rgb(0, 0, 255, 0.806);font-size: 15px;"></i>&nbsp; Contact</a></li>
         
       </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
<!-- .navbar -->

     
    </div>
  </header><!-- End Header -->



  <main id="main">
    <br>
        <h1 style="display: flex;justify-content: center;align-items: center;margin-top: 100px;font-weight: bold;">Anti Ragging Committe</h1>
     
        <div class="container">
            <div class="row mb-5">
				<div class="col-md-9 col-xs-12">
					

<div class="card card-body shadow p-4 align-items-start mt-3"  style="border: 0px solid rgba(255, 255, 255, 0);">
    <div class="page-view">
      <!--hh-->
      <?php
             $q = mysqli_query($con, "SELECT agc FROM textdata") or die('Error197');
         while ($row = mysqli_fetch_array($q)) {
          echo $row[0];
         }?>
    </div>
</div>				</div>
				<div class="mt-3 col-md-3 col-xs-12" id="sidebar">
					<div class="row g-4 mb-3">
						<div class="col-lg-12">
							<div class="bg-info bg-opacity-10 rounded-3 p-4">
								<span class="display-6 text-info"><i class="bi bi-headset"></i></span>
								<h5>Contact us</h5>
								<p>ADDRESS:<br>Dr B R A GMR Polytechnic,Bommuru,<br>Rajamahendravaram,<br>533124.&nbsp;</p>
								<a href="contact.php" class="btn btn-dark mb-0" style="background-color: rgb(13,202,240);border: 0px solid transparent;">Contact</a>
							</div>
						</div>
					</div>
						<div class="card card-body shadow p-4 mb-4"  style="border: 0px solid rgba(255, 255, 255, 0);">
                        <h4 class="mb-3">Committees</h4>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <a href="academic-council.php" class="h6 fw-light"><i class="fas fa-caret-right text-orange me-2"></i>Academic Council</a></div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <a href="financial-committe.php" class="h6 fw-light"><i class="fas fa-caret-right text-orange me-2"></i>Finance Committee</a></div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <a href="grievance.php" class="h6 fw-light"><i class="fas fa-caret-right text-orange me-2"></i>GRIEVANCE REDRESSAL CELL</a></div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <a href="antiragging-squad.php" class="h6 fw-light"><i class="fas fa-caret-right text-orange me-2"></i>ANTI RAGGING SQUAD</a></div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <a href="antiragging-committe.php" class="h6 fw-light"><i class="fas fa-caret-right text-orange me-2"></i>ANTI RAGGING COMMITTEE</a></div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <a href="internalcomplaints-committe.php" class="h6 fw-light"><i class="fas fa-caret-right text-orange me-2"></i>INTERNAL COMPLAINTS COMMITTEE</a></div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <a href="scst-committe.php" class="h6 fw-light"><i class="fas fa-caret-right text-orange me-2"></i>SC/ST COMMITTEE</a></div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <a href="student-counsellors.php" class="h6 fw-light"><i class="fas fa-caret-right text-orange me-2"></i>STUDENT COUNSELORS</a></div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <a href="purchase-committe.php" class="h6 fw-light"><i class="fas fa-caret-right text-orange me-2"></i>PURCHASE COMMITTEE</a></div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <a href="institution-industrycell.php" class="h6 fw-light"><i class="fas fa-caret-right text-orange me-2"></i>INSTITUTION-INDUSTRY CELL</a></div>							
                </div>
				</div>

			</div>
        </div>
    </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="footer-new">
            <img src="img/polylogo.jpg" style="border-radius: 15px;" ><br><br>
            <span style="margin-right: auto;margin-left: auto;"><i class="ri-map-pin-line"></i>&nbsp;Address:<br>Dr B R A GMR Polytechnic,Bommuru,<br>Rajamahendravaram,<br>533124.<br><br><i class="ri-phone-line"></i>&nbsp;Call Us:<br><a href="tel:09912344427">+91 9912344427</a><br><a href="tel:09912342037">+91 9912342037</a><br><br><i class="ri-time-line"></i>&nbsp;Visiting time:<br>Mon-Sat 9:00AM - 04:00PM</span><br>
      
            <span>©2023 Dr.B.R.A.Govt.Model Residential Polytechnic Bommuru Rajahmundry. All rights reserved.</span>
          </div>

      

        </div>
      </div>
    </div>

   
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
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