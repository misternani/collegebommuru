<?php
session_start();
include_once 'dbConnection.php';

if (!isset($_SESSION['username'])) {
    header("location:index.php");
}

$editid=$_POST['editid'];
$info = $_POST['info'];
$profileimage = isset($_FILES['profileimage']) && $_FILES['profileimage']['error'] === UPLOAD_ERR_OK ? $_FILES['profileimage']['name'] : 'off';


// Directory to store the uploaded files
$targetDir = "../sp_img/";

// Get the file names
$fileName1 = 'off';



if ($profileimage !== 'off') {
    $fileName1 = $_FILES["profileimage"]["name"];
}




// File paths for moving the uploaded files
$targetFilePath1 = $targetDir . $fileName1;




    $query = "UPDATE special_images SET info = '$info'  WHERE role = '$editid'";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo '<div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; font-size: 48px; font-family: Arial; color: #333; text-align: center;">Special Image Updated successfully.<br><a href="choosespecialimage.php" style="display: inline-block; background-color: #1a73e8; padding: 5px 10px; border-radius: 8px; color: white; text-decoration: none;font-size: 38px;">Go Back</a></div>';
       
    } else {
        echo "Error storing file names in the database: " . mysqli_error($con);
    }






if ($profileimage !== 'off' && move_uploaded_file($_FILES["profileimage"]["tmp_name"], $targetFilePath1)) {
    // Update the database with the file name
    $query = "UPDATE special_images SET path = '$fileName1' WHERE role = '$editid'";
    $result = mysqli_query($con, $query);

    if (!$result) {
        echo "Error updating afterimage in the database: " . mysqli_error($con);
    }
}


?>
