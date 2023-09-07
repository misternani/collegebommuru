<?php
session_start();
include_once 'dbConnection.php';

if (!(isset($_SESSION['username']))) {
    header("location:index.php");
}

$edittext=$_POST['textvariable'];
$valueofmessage="0";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="image.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="dashboard">

<div id="preloader">
    <i>.</i>
    <i>.</i>
    <i>.</i>
</div>

<div id="main-wrapper">

    <div class="header">
   
 </div>

    <div class="sidebar">
    
       <div class="menu">
        <ul>
            <li><a href="choosetextdata.php">
                    <span><i class="ri-text"></i></span>
                    <span class="nav-text">Edit Text Data</span>
                </a>
            </li>
            <li><a href="choosespecialimage.php">
                    <span><i class="ri-gallery-upload-line"></i></span>
                    <span class="nav-text">Edit Special Image</span>
                </a>
            </li>
            <li><a href="grievance.php">
                    <span><i class="ri-questionnaire-line"></i></span>
                    <span class="nav-text">Grievance Members</span>
                </a>
            </li>
            <li><a href="faculty.php">
                    <span><i class="ri-user-star-line"></i></span>
                    <span class="nav-text">Faculty Members</span>
                </a>
            </li>
            <li><a href="gallery.php">
                    <span><i class="ri-gallery-line"></i></span>
                    <span class="nav-text">Gallery</span>
                </a>
            </li>
          <li><a href="polycetinfo.php">
                    <span><i class="ri-information-line"></i></span>
                    <span class="nav-text">Polycet Information</span>
                </a>
            </li>
            <li><a href="blog.php">
                    <span><i class="ri-mail-star-line"></i></span>
                    <span class="nav-text">Blog</span>
                </a>
            </li>
           
            <li class="logout"><a href="logout.php">
                    <span><i class="ri-logout-circle-line"></i></span>
                    <span class="nav-text">Signout</span>
                </a>
            </li>
        </ul>
    </div>
</div>

    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-xl-4">
                                <div class="page-title-content">
                                    <h3>Edit Text Data</h3>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xxl-12 col-xl-12">
                    
                    <div class="row">
                        <div class="col-xxl-12 col-xl-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Text</h4>
                                </div>
                                <div class="card-body">
                                    <form action="posttext.php" method="post" enctype="multipart/form-data">
                                        <div class="row g-3">
                                           
                                            <div class="col-xxl-12 col-12 mb-3">
                                                <label class="form-label">Text</label><br>
                                                <?php
                                                echo '<input type="hidden" name="variable" value="'.$edittext.'"> ';
             $query = "SELECT $edittext FROM textdata";
             $q = mysqli_query($con,$query) or die('Error197');
         while ($row = mysqli_fetch_array($q)) {
            $valueofmessage=$row[0];
         }?>
         <textarea  id="basic-example" name="message" rows="10" cols="160"  style="border:1px solid #e5e5e5;border-radius: 5px;">
        <?php echo $valueofmessage; ?>
        </textarea>
                                               
                                            </div>

                                            <div class="col-xxl-12 col-12 mb-3">
                                                <button class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>



<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src='https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5-stable/tinymce.min.js'></script><script  src="script.js"></script>


<script src="js/scripts.js"></script>


</body>

</html>