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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6" style="width: 100%;">
          
          <h1>Dr.B.R.A.Govt.Model Residential Polytechnic Bommuru Rajahmundry</h1><br>
          <span style="color: white;">Affiliated to <b> State Board of Technical Education and Training AP</b></span>
          <br><a href="#" class="btn-get-started scrollto" style="background-color: rgb(0, 128, 255);">Contact Us</a>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    
    <div class="tab-content">
      <br><br>

     
        <div class="row" style="margin-left: auto;margin-right: auto;width: 90%;">
          <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
            <h2 style="font-weight: bold;">Commissioner's Message</h2>
            <?php
             $q = mysqli_query($con, "SELECT c_message FROM textdata") or die('Error197');
         while ($row = mysqli_fetch_array($q)) {
          echo $row[0];
         }?>
           
            
          </div>
          <div class="col-lg-6 order-1 order-lg-2 text-center">
          <?php
             $q = mysqli_query($con, "SELECT `path`,info FROM special_images WHERE role='commissioner' ") or die('Error197');
         while ($row = mysqli_fetch_array($q)) {
          echo  '<img src="sp_img/'.$row[0].'" alt="" class="img-new" >';
          echo ' <br><br><span style="font-weight: bold;font-size: 16px;">'.$row[1].'</span>
          <br><span style="font-weight: bold;font-size: 14px;">Commissioner of Technical Education</span><br><br>';
         }?>
           
           
          </div>
        </div>
     

    </div>
    

    

    <!-- ======= Tabs Section ======= -->
    <section id="tabs" class="tabs">
      <div class="container" data-aos="fade-up">
        <h1 style="font-weight: bolder;margin-right: auto;margin-left: auto;color: black;display: flex;justify-content: center;align-items: center;">Departments</h1>
        <br>
        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3" style="width: 33%;">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <i class="ri-computer-line"></i>
              <h4 class="d-none d-lg-block">Computer Engineering</h4>
            </a>
          </li>
          <li class="nav-item col-3" style="width: 33%;">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <i class="ri-roadster-line"></i>
              <h4 class="d-none d-lg-block">Mechanical Engineering</h4>
            </a>
          </li>
          <li class="nav-item col-3" style="width: 33%;">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <i class="ri-cpu-line"></i>
              <h4 class="d-none d-lg-block">Electronic & Communication Engineering</h4>
            </a>
          </li>
         
        </ul>
        <br>
        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                <h3>Computer Engineering</h3>
                <br>
                <?php
             $q = mysqli_query($con, "SELECT cse_about FROM textdata") or die('Error197');
         while ($row = mysqli_fetch_array($q)) {
          echo $row[0];
         }?>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/tabs-1.jpg" alt="" class="img-fluid" style="border-radius: 15px;">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Electrical & Electronics Engineering</h3>
                <br>
                <?php
             $q = mysqli_query($con, "SELECT eee_about FROM textdata") or die('Error197');
         while ($row = mysqli_fetch_array($q)) {
          echo $row[0];
         }?>
               
               
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/tabs-2.png" alt="" class="img-fluid" style="border-radius: 15px;">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Electronic & Communication Engineering</h3>
                <br>
                <?php
             $q = mysqli_query($con, "SELECT ece_about FROM textdata") or die('Error197');
         while ($row = mysqli_fetch_array($q)) {
          echo $row[0];
         }?>
                
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/tabs-3.jpg" alt="" class="img-fluid" style="height: 100%;border-radius: 15px;">
              </div>
            </div>
          </div>
         
        </div>

      </div>
    </section><!-- End Tabs Section -->

     <!-- ======= Team Section ======= -->
     <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="color: black;">Our Faculty</h2>
          
        </div>

        <div class="row">

          
          <?php
             $q = mysqli_query($con, "SELECT * FROM faculty") or die('Error197');
         while ($row = mysqli_fetch_array($q)) {
          echo '<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
          <div class="member-img">
            <img src="fm_img/'.$row['imagepath'].'" class="img-fluid" style="height:350px;width:350px;" alt="">
            
          </div>
          <div class="member-info">
            <h4>'.$row['info'].'</h4>
            <span style="font-weight: bold;">'.$row['role'].'</span>
          </div>
        </div></div>';
         }?>
         
         


        </div>

      </div>
    </section><!-- End Team Section -->

   



    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Facilities We Offer</h2>
          
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="img/p10.png" class="testimonial-img" alt="">
                  <h3>Library</h3>
                  
                  <p>
                   Collection of books,materials or media that are accessible for use.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="img/p20.png" class="testimonial-img" alt="">
                  <h3>Digital Learning</h3>
               
                  <p>
                    Formalised teaching with help of electronic resources.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="img/p30.png" class="testimonial-img" alt="">
                  <h3>Sports</h3>
                  
                  <p>
                    An individual or group activity pursued for exercies or pleasure.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="img/p40.png" class="testimonial-img" alt="">
                
                  <h3>Quality Education</h3>
               
                  <p>
                    Appropriate skills development,gender parity.<br><br>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="color: black;">Grievance Cell Members</h2>
          
        </div>

        <div class="row" style="justify-content: center;align-items: center;">

        <?php
             $q = mysqli_query($con, "SELECT * FROM g_members") or die('Error197');
         while ($row = mysqli_fetch_array($q)) {
          echo '<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
          <div class="member-img">
            <img src="gm_img/'.$row['imagepath'].'" class="img-fluid" style="height:350px;width:350px;" alt="">
            
          </div>
          <div class="member-info">
            <h4>'.$row['info'].'</h4>
            <span style="font-weight: bold;">'.$row['role'].'</span>
          </div>
        </div></div>';
         }?>

         

        </div>

      </div>
    </section><!-- End Team Section -->

   

  

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