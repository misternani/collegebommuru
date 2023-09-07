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
        <h1 style="display: flex;justify-content: center;align-items: center;margin-top: 100px;font-weight: bold;">Electronic and Communication Engineering</h1>
     
        <div class="container">
            <div class="row mb-5">
				<div class="col-md-9 col-xs-12">
					

<div class="card card-body shadow p-4 align-items-start mt-3"  style="border: 0px solid rgba(255, 255, 255, 0);">
    <div class="page-view">
        <section id="departments" style="padding-top: 1px;">
            <div class="container">
    
    
                <div class="tinya-slider arrow-round arrow-creative arrow-blur arrow-hover py-1">
                    <ul  class="tiny-salider-inner nav nav-pills nav-pills-bg-soft justify-content-sm-center mb-4 px-3" id="course-pills-tab" role="tablist">
                        <li class="bg-body text-center rounded-2 border py-2 px-1 position-relative nav-item me-2 me-sm-2" role="presentation"><button class="text-center btn btn-block nav-link mb-2 mb-md-0 active" id="course-pills-tab-about" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-about" type="button" role="tab" aria-controls="course-pills-tabs-about" aria-selected="true">About</button></li>
                        <li class="bg-body text-center rounded-2 border py-2 px-1 position-relative nav-item me-2 me-sm-2" role="presentation"><button class="text-center btn btn-block nav-link mb-2 mb-md-0 " id="course-pills-tab-vision" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-vision" type="button" role="tab" aria-controls="course-pills-tabs-vision" aria-selected="true">Vision</button></li>
                        <li class="bg-body text-center rounded-2 border py-2 px-1 position-relative nav-item me-2 me-sm-2" role="presentation"><button class="text-center btn btn-block nav-link mb-2 mb-md-0 " id="course-pills-tab-about" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-faculty" type="button" role="tab" aria-controls="course-pills-tabs-faculty" aria-selected="false" tabindex="-1">Faculty</button></li>
                        <li class="bg-body text-center rounded-2 border py-2 px-1 position-relative nav-item me-2 me-sm-2" role="presentation"><button class="text-center btn btn-block nav-link mb-2 mb-md-0 " id="course-pills-tab-about" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-labs" type="button" role="tab" aria-controls="course-pills-tabs-labs" aria-selected="false" tabindex="-1">Labs</button></li>
                        <li class="bg-body text-center rounded-2 border py-2 px-1 position-relative nav-item me-2 me-sm-2" role="presentation"><button class="text-center btn btn-block nav-link mb-2 mb-md-0 " id="course-pills-tab-about" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-events" type="button" role="tab" aria-controls="course-pills-tabs-events" aria-selected="false" tabindex="-1">Events</button></li>
                    </ul>
                </div>
                <div class="tab-content" id="course-pills-tabContent">
                    <div class="tab-pane fade  " id="course-pills-tabs-vision" role="tabpanel" aria-labelledby="course-pills-tab-vision">
                        <div class="row mb-4">
                            <section class="py-0 pt-lg-1 dept-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 position-relative z-index-1">
                                            <div class="bg-grad-pink p-4 p-sm-2 rounded position-relative z-index-n1 overflow-hidden" style="padding-left: 40px !important; padding-right: 40px !important; line-height: 35px; font-size: 18px;">
    
                                                <div class="row g-3 align-items-center justify-content-lg-end position-relative py-4">
                                                    <div class="col-md-12">
                                                    <?php
             $q = mysqli_query($con, "SELECT ece_vision FROM textdata") or die('Error197');
         while ($row = mysqli_fetch_array($q)) {
          echo $row[0];
         }?>                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
    
                        </div>
    
                    </div>
                    <div class="tab-pane fade show active" id="course-pills-tabs-about" role="tabpanel" aria-labelledby="course-pills-tab-about">
                        <div class="row mb-4">
                            <section class="py-0 pt-lg-1 dept-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 position-relative z-index-1">
                                            <div class="bg-grad-pink p-4 p-sm-2 rounded position-relative z-index-n1 overflow-hidden" style="padding-left: 40px !important; padding-right: 40px !important; line-height: 35px; font-size: 18px;">
    
                                                <div class="row g-3 align-items-center justify-content-lg-end position-relative py-4">
                                                    <div class="col-md-12">
                                                    <?php
             $q = mysqli_query($con, "SELECT ece_about FROM textdata") or die('Error197');
         while ($row = mysqli_fetch_array($q)) {
          echo $row[0];
         }?>                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
    
                        </div>
    
                    </div>
                    <div class="tab-pane fade" id="course-pills-tabs-faculty" role="tabpanel" aria-labelledby="course-pills-tab-faculty">
                        <div class="row g-4">
                            <section class="py-5">
                                <div class="container position-relative">
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- SVG decoration START -->
                                            
                                            <!-- SVG decoration END -->
    
                                            <div class="bg-dark p-4 p-sm-5 rounded-3" style="background: linear-gradient(45deg, #120b0b, #6c6565);">
                                                <div class="row justify-content-center position-relative">
                                                    <!-- Svg decoration START -->
                                                    
                                                    <!-- SVG decoration END -->
    
                                                    <!-- Action box -->
                                                    <div class="row align-items-center">
                                                        <div class="align-items-center">
                                                            <!-- Title -->
                                                            <div class="row">
                                                                <h3 class="text-white mb-5">Our Faculty</h3>
                                                                                                                        </div>
    
                                                        </div> <!-- Row END -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- Row END -->
                                </div>
                            </section>
    
                        </div>
                    </div>
    
                    <div class="tab-pane fade" id="course-pills-tabs-labs" role="tabpanel" aria-labelledby="course-pills-tab-labs">
                        <div class="row g-4">
                            <section class="py-5">
                                <div class="container position-relative">
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- SVG decoration START -->
                                            <figure class="position-absolute top-50 start-50 translate-middle ms-2">
                                                <svg>
                                                    <path class="fill-white opacity-2" d="m496 22.999c0 10.493-8.506 18.999-18.999 18.999s-19-8.506-19-18.999 8.507-18.999 19-18.999 18.999 8.506 18.999 18.999z"></path>
                                                    <path class="fill-white opacity-2" d="m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z"></path>
                                                    <path class="fill-white opacity-2" d="m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z"></path>
                                                    <path class="fill-white opacity-2" d="m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z"></path>
                                                </svg>
                                            </figure>
                                            <!-- SVG decoration END -->
    
                                            <div class="bg-dark p-4 p-sm-5 rounded-3" style="background: linear-gradient(45deg, #120b0b, #6c6565);">
                                                <div class="row justify-content-center position-relative">
                                                    <!-- Svg decoration START -->
                                                    <figure class="fill-white opacity-1 position-absolute top-50 start-0 translate-middle-y">
                                                        <svg width="141px" height="141px">
                                                            <path d="M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z"></path>
                                                        </svg>
                                                    </figure>
                                                    <!-- SVG decoration END -->
    
                                                    <!-- Action box -->
                                                    <div class="row align-items-center">
                                                        <div class="align-items-center">
                                                            <!-- Title -->
                                                            <div class="row">
                                                                <h3 class="text-white mb-5">Our labs</h3>
                                                                                                                                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-12 mb-4">
                                                                            <div class="card shadow h-100 pt-3">
                                                                                <img src="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/lab_86_1672074308_lab1.jpg.jpg" class="card-img-top" alt="course image">
                                                                                <div class="card-body pb-1 pt-1">
    
                                                                                    <h5 class="card-title fw-normal">Lab 1</h5>
                                                                                    <p> <br></p>
                                                                                </div>
    
            <div class="row g-4 filter-container overflow-hidden" data-isotope="{&quot;layoutMode&quot;: &quot;masonry&quot;}">
    
                                <div class="col-6 col-md-4 col-lg-3 grid-item">
                        <div class="card overflow-hidden">
                            <div class="card-overlay-hover">
                                <img src="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/lab_86_1672074308_lab1.jpg.jpg" class="rounded-3" alt="course image">
                            </div>
                            <a class="card-element-hover position-absolute w-100 h-100" data-glightbox="" data-gallery="gallery" href="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/lab_86_1672074308_lab1.jpg.jpg">
                                <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
                            </a>
                        </div>
                    </div>
                                  <div class="col-6 col-md-4 col-lg-3 grid-item">
                        <div class="card overflow-hidden">
                            <div class="card-overlay-hover">
                                <img src="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/lab_86_1672074308_lab2.jpg.jpg" class="rounded-3" alt="course image">
                            </div>
                            <a class="card-element-hover position-absolute w-100 h-100" data-glightbox="" data-gallery="gallery" href="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/lab_86_1672074308_lab2.jpg.jpg">
                                <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
                            </a>
                        </div>
                    </div>
                                  <div class="col-6 col-md-4 col-lg-3 grid-item">
                        <div class="card overflow-hidden">
                            <div class="card-overlay-hover">
                                <img src="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/lab_86_1672074308_lab3.jpg.jpg" class="rounded-3" alt="course image">
                            </div>
                            <a class="card-element-hover position-absolute w-100 h-100" data-glightbox="" data-gallery="gallery" href="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/lab_86_1672074308_lab3.jpg.jpg">
                                <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
                            </a>
                        </div>
                    </div>
                          </div>
    
                                                                            </div>
                                                                        </div>
    
    
    
                                                                                                                                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-12 mb-4">
                                                                            <div class="card shadow h-100 pt-3">
                                                                                <img src="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/lab_86_1672074308_lab3.jpg.jpg" class="card-img-top" alt="course image">
                                                                                <div class="card-body pb-1 pt-1">
    
                                                                                    <h5 class="card-title fw-normal">Lab 2</h5>
                                                                                    <p> <br></p>
                                                                                </div>
    
            <div class="row g-4 filter-container overflow-hidden" data-isotope="{&quot;layoutMode&quot;: &quot;masonry&quot;}">
    
                                <div class="col-6 col-md-4 col-lg-3 grid-item">
                        <div class="card overflow-hidden">
                            <div class="card-overlay-hover">
                                <img src="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/lab_86_1672074308_lab3.jpg.jpg" class="rounded-3" alt="course image">
                            </div>
                            <a class="card-element-hover position-absolute w-100 h-100" data-glightbox="" data-gallery="gallery" href="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/lab_86_1672074308_lab3.jpg.jpg">
                                <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
                            </a>
                        </div>
                    </div>
                                  <div class="col-6 col-md-4 col-lg-3 grid-item">
                        <div class="card overflow-hidden">
                            <div class="card-overlay-hover">
                                <img src="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/lab_86_1672074308_lab2.jpg.jpg" class="rounded-3" alt="course image">
                            </div>
                            <a class="card-element-hover position-absolute w-100 h-100" data-glightbox="" data-gallery="gallery" href="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/lab_86_1672074308_lab2.jpg.jpg">
                                <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
                            </a>
                        </div>
                    </div>
                          </div>
    
                                                                            </div>
                                                                        </div>
    
    
    
                                                                                                                        </div>
    
                                                        </div> <!-- Row END -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- Row END -->
                                </div>
                            </section>
    
                        </div>
                    </div>
    
                    <div class="tab-pane fade" id="course-pills-tabs-events" role="tabpanel" aria-labelledby="course-pills-tab-events">
                        <div class="row g-4">
                            <section class="py-5">
                                <div class="container position-relative">
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- SVG decoration START -->
                                            <figure class="position-absolute top-50 start-50 translate-middle ms-2">
                                                <svg>
                                                    <path class="fill-white opacity-2" d="m496 22.999c0 10.493-8.506 18.999-18.999 18.999s-19-8.506-19-18.999 8.507-18.999 19-18.999 18.999 8.506 18.999 18.999z"></path>
                                                    <path class="fill-white opacity-2" d="m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z"></path>
                                                    <path class="fill-white opacity-2" d="m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z"></path>
                                                    <path class="fill-white opacity-2" d="m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z"></path>
                                                </svg>
                                            </figure>
                                            <!-- SVG decoration END -->
    
                                            <div class="bg-dark p-4 p-sm-5 rounded-3" style="background: linear-gradient(45deg, #120b0b, #6c6565);">
                                                <div class="row justify-content-center position-relative">
                                                    <!-- Svg decoration START -->
                                                    <figure class="fill-white opacity-1 position-absolute top-50 start-0 translate-middle-y">
                                                        <svg width="141px" height="141px">
                                                            <path d="M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z"></path>
                                                        </svg>
                                                    </figure>
                                                    <!-- SVG decoration END -->
    
                                                    <!-- Action box -->
                                                    <div class="row align-items-center">
                                                        <div class="align-items-center">
                                                            <!-- Title -->
                                                            <div class="row">
                                                                <h3 class="text-white mb-5">Our Events</h3>
                                                                                                                                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-12 mb-4">
                                                                            <div class="card shadow h-100 pt-3">
                                                                                <div class="card-body pb-1 pt-1">
                                                                                    <section style="padding:2px">
                                                                                    <div class="container">
                                                                                        <!-- Title -->
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 mb-4">
                                                                                                <h2>Event 2</h2>
                                                                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt repellat pariatur illo autem voluptates quae veniam quidem quas doloremque iure assumenda quaerat ducimus aliquam quasi dolorem corporis possimus numquam, qui nam ratione reiciendis vero nulla. Doloribus, amet, repellat. Voluptas repellat deserunt incidunt, officiis deleniti quas illo maiores fuga ex, ab, eos laboriosam quibusdam nostrum magni ipsum error aliquid libero vero? Officia voluptatibus dignissimos aut dolorem earum voluptatem numquam expedita praesentium eligendi laborum odio reprehenderit, autem similique cumque labore ab illum nostrum libero. Non quas consequatur aliquid sit aliquam, excepturi commodi fuga mollitia illum incidunt. Mollitia, sed, a! Facilis blanditiis minus repellendus atque natus illo aliquam ratione illum, dolores quas delectus placeat, ut accusantium, obcaecati neque? Eum, esse quibusdam facilis, voluptates voluptas doloremque ad quod iste rem, facere magni minima voluptatem maxime sit! Quod vero aliquid suscipit qui provident! Blanditiis magnam qui deserunt quia, expedita itaque. Amet, sunt ullam nisi enim. Vel reiciendis, mollitia quae nihil ipsam amet ipsum libero harum repudiandae eius corporis ad sunt repellat, dolore quasi. Amet, autem dolorum illo nostrum provident. Quibusdam nobis, distinctio. Quidem ipsum asperiores incidunt totam eveniet repellendus neque tempora animi ratione quibusdam ipsam dicta accusamus iusto, perferendis impedit nihil repudiandae blanditiis adipisci inventore quas nostrum! Deserunt in consectetur vitae corrupti, harum ut doloremque mollitia earum quas molestiae! Maxime necessitatibus sit fugiat, molestias similique reprehenderit. Minus, deserunt illum numquam accusantium. Eaque reiciendis expedita, quos quod sint ipsa voluptatum laborum deleniti unde harum consectetur nostrum est sunt aperiam quisquam molestias voluptatem enim nesciunt tempore odio amet, adipisci consequatur itaque! Itaque a ratione ex! Quos consectetur culpa recusandae facere, aspernatur tenetur sint ipsa, hic consequatur quia in quidem fugit ipsum ullam expedita obcaecati impedit vitae. Eveniet consectetur voluptate recusandae vitae dicta at quae officiis, repellendus similique tempore, rem saepe numquam, debitis esse molestias? Cum, facilis! Itaque quibusdam tenetur quam harum suscipit aspernatur corrupti nihil id, aliquid rerum soluta delectus porro fugiat beatae ipsam voluptate adipisci. Necessitatibus cumque sapiente mollitia, deserunt cupiditate, enim dolor tempore, nesciunt dolorem assumenda aliquid praesentium officiis reiciendis placeat eaque blanditiis. Quod harum fugiat eaque autem repellendus sequi distinctio excepturi exercitationem, facilis voluptates enim quae voluptas esse non consequatur accusantium laudantium dolor, vel asperiores eum hic ipsam aut animi. Odio incidunt, voluptas magni accusamus, fugiat dolorum harum repellat at architecto distinctio necessitatibus alias tenetur quidem eligendi quis adipisci pariatur! Excepturi nam, earum, numquam a non, officia sit voluptas, delectus distinctio sed et? Autem!</p>
                                                                                            </div>
                                                                                        </div>
    
                                                                                        <div class="row g-4 filter-container overflow-hidden" data-isotope="{&quot;layoutMode&quot;: &quot;masonry&quot;}">
                                                                                                                                                                                                <div class="col-6 col-md-4 col-lg-3 grid-item">
                                                                                                            <div class="card overflow-hidden">
                                                                                                                <div class="card-overlay-hover">
                                                                                                                    <img src="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/event_85_1672074308_lab1.jpg.jpg" class="rounded-3" alt="course image">
                                                                                                                </div>
                                                                                                                <a class="card-element-hover position-absolute w-100 h-100" data-glightbox="" data-gallery="gallery" href="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/event_85_1672074308_lab1.jpg.jpg">
                                                                                                                    <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                                                                                                                       <div class="col-6 col-md-4 col-lg-3 grid-item">
                                                                                                            <div class="card overflow-hidden">
                                                                                                                <div class="card-overlay-hover">
                                                                                                                    <img src="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/event_85_1672074308_logo.jpg.jpg" class="rounded-3" alt="course image">
                                                                                                                </div>
                                                                                                                <a class="card-element-hover position-absolute w-100 h-100" data-glightbox="" data-gallery="gallery" href="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/event_85_1672074308_logo.jpg.jpg">
                                                                                                                    <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                                                                                                                       <div class="col-6 col-md-4 col-lg-3 grid-item">
                                                                                                            <div class="card overflow-hidden">
                                                                                                                <div class="card-overlay-hover">
                                                                                                                    <img src="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/event_85_1672074308_lab3.jpg.jpg" class="rounded-3" alt="course image">
                                                                                                                </div>
                                                                                                                <a class="card-element-hover position-absolute w-100 h-100" data-glightbox="" data-gallery="gallery" href="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/event_85_1672074308_lab3.jpg.jpg">
                                                                                                                    <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                                 
                                                                                        </div>
                                                                                    </div>
                                                                                </section>
    
                                                                                </div>
                                                                                <div class="card-footer pt-0 pb-3">
                                                                                    <hr>
                                                                                    <div class="d-flex justify-content-between mt-2">
                                                                                        <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>2018-04-11 09:00:00</span>
                                                                                        <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>2018-09-30 11:00:00</span>
                                                                                    </div>
                                                                                </div>
           
    
                                                                            </div>
                                                                        </div>
                                                                                                                                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-12 mb-4">
                                                                            <div class="card shadow h-100 pt-3">
                                                                                <div class="card-body pb-1 pt-1">
                                                                                    <section style="padding:2px">
                                                                                    <div class="container">
                                                                                        <!-- Title -->
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 mb-4">
                                                                                                <h2>Event 1</h2>
                                                                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt repellat pariatur illo autem voluptates quae veniam quidem quas doloremque iure assumenda quaerat ducimus aliquam quasi dolorem corporis possimus numquam, qui nam ratione reiciendis vero nulla. Doloribus, amet, repellat. Voluptas repellat deserunt incidunt, officiis deleniti quas illo maiores fuga ex, ab, eos laboriosam quibusdam nostrum magni ipsum error aliquid libero vero? Officia voluptatibus dignissimos aut dolorem earum voluptatem numquam expedita praesentium eligendi laborum odio reprehenderit, autem similique cumque labore ab illum nostrum libero. Non quas consequatur aliquid sit aliquam, excepturi commodi fuga mollitia illum incidunt. Mollitia, sed, a! Facilis blanditiis minus repellendus atque natus illo aliquam ratione illum, dolores quas delectus placeat, ut accusantium, obcaecati neque? Eum, esse quibusdam facilis, voluptates voluptas doloremque ad quod iste rem, facere magni minima voluptatem maxime sit! Quod vero aliquid suscipit qui provident! Blanditiis magnam qui deserunt quia, expedita itaque. Amet, sunt ullam nisi enim. Vel reiciendis, mollitia quae nihil ipsam amet ipsum libero harum repudiandae eius corporis ad sunt repellat, dolore quasi. Amet, autem dolorum illo nostrum provident. Quibusdam nobis, distinctio. Quidem ipsum asperiores incidunt totam eveniet repellendus neque tempora animi ratione quibusdam ipsam dicta accusamus iusto, perferendis impedit nihil repudiandae blanditiis </p>
                                                                                            </div>
                                                                                        </div>
    
                                                                                        <div class="row g-4 filter-container overflow-hidden" data-isotope="{&quot;layoutMode&quot;: &quot;masonry&quot;}">
                                                                                                                                                                                                <div class="col-6 col-md-4 col-lg-3 grid-item">
                                                                                                            <div class="card overflow-hidden">
                                                                                                                <div class="card-overlay-hover">
                                                                                                                    <img src="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/event_84_1672074308_lab1.jpg.jpg" class="rounded-3" alt="course image">
                                                                                                                </div>
                                                                                                                <a class="card-element-hover position-absolute w-100 h-100" data-glightbox="" data-gallery="gallery" href="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/event_84_1672074308_lab1.jpg.jpg">
                                                                                                                    <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                                                                                                                       <div class="col-6 col-md-4 col-lg-3 grid-item">
                                                                                                            <div class="card overflow-hidden">
                                                                                                                <div class="card-overlay-hover">
                                                                                                                    <img src="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/event_84_1672074308_logo.jpg.jpg" class="rounded-3" alt="course image">
                                                                                                                </div>
                                                                                                                <a class="card-element-hover position-absolute w-100 h-100" data-glightbox="" data-gallery="gallery" href="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/event_84_1672074308_logo.jpg.jpg">
                                                                                                                    <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                                                                                                                       <div class="col-6 col-md-4 col-lg-3 grid-item">
                                                                                                            <div class="card overflow-hidden">
                                                                                                                <div class="card-overlay-hover">
                                                                                                                    <img src="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/event_84_1672074308_lab3.jpg.jpg" class="rounded-3" alt="course image">
                                                                                                                </div>
                                                                                                                <a class="card-element-hover position-absolute w-100 h-100" data-glightbox="" data-gallery="gallery" href="https://drbragmrpolyrajamundry.ac.in//media/drbragmrpolyrajamundry_ac_in/event_84_1672074308_lab3.jpg.jpg">
                                                                                                                    <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                                 
                                                                                        </div>
                                                                                    </div>
                                                                                </section>
    
                                                                                </div>
                                                                                <div class="card-footer pt-0 pb-3">
                                                                                    <hr>
                                                                                    <div class="d-flex justify-content-between mt-2">
                                                                                        <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>2018-04-11 09:00:00</span>
                                                                                        <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>2018-09-30 11:00:00</span>
                                                                                    </div>
                                                                                </div>
           
    
                                                                            </div>
                                                                        </div>
                                                                                                                        </div>
    
                                                        </div> <!-- Row END -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- Row END -->
                                </div>
                            </section>
    
                        </div>
                    </div>
    
                </div>
            </div>
        </section>
       <p>
       
    </p>




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