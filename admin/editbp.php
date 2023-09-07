<?php
session_start();
include_once 'dbConnection.php';
$idb=$_GET['idb'];
if (!(isset($_SESSION['username']))) {
    header("location:index.php");
}
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
                                    <h3>Edit Blog Post</h3>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xxl-12 col-xl-12">
                    
                    <div class="row">
                        <div class="col-xxl-12 col-xl-6 col-lg-6">
                        <?php
                        $q = mysqli_query($con, "SELECT * FROM blog WHERE ID ='$idb'  ") or die('Error197');
                                                        while ($row = mysqli_fetch_array($q)) {
                                                           
                                                         
                         echo '
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Update Review Post</h4>
                                </div>
                                <div class="card-body">
                                    <form action="updatebp.php" method="post" enctype="multipart/form-data">
                                        <div class="row g-3">
                                            <div class="col-xxl-12 col-12 mb-3">
                                                <label class="form-label"> Title:</label>
                                                <input type="text" class="form-control" placeholder="Title" name="title" id="title" value="'.$row['title'].'" required>
                                            </div>
                                            

                                            <input type="hidden" value="'.$idb.'" name="editid" id="editid">
                                            <div class="col-xxl-12 col-12 mb-3">
                                            <label class="form-label">Uploaded Profile image:</label>
                                                <a href="../reviews/'.$row['imagepath'].'">'.$row['imagepath'].'</a>

                                                <div class="form-file">
                                                    <label class="form-label" for="beforeimage">Upload New Profile-Image:</label>
                                                    <input type="file" class="form-file-input" id="profileimage" name="profileimage" accept="image/*" >
                                                    
                                                </div>
                                            </div>
                                            
                                            

                                            <div class="col-xxl-12 col-12 mb-3">
                                                <label class="form-label">Content:</label><br>
                                                <textarea  id="basic-example" name="content" rows="10" cols="160"  style="border:1px solid #e5e5e5;border-radius: 5px;" >'.$row['content'].'</textarea>
                                            </div>

                                            <div class="col-xxl-12 col-12 mb-3">
                                                <button class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>';
                                                        }?>
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


<script src='https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5-stable/tinymce.min.js'></script><script  src="script.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="js/scripts.js"></script>


</body>

</html>