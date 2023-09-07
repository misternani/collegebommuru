<?php
session_start();
include_once 'dbConnection.php';

if (!isset($_SESSION['username'])) {
    header("location:index.php");
}

$id = $_GET['idb'];

    // Store file names in the database
    $query = "DELETE FROM faculty WHERE ID = $id";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo '<div style="display: flex; align-items: center; justify-content: center; height: 100vh; font-size: 48px; font-family: Arial; color: #333; text-align: center;">';
echo "Faculty Member Removed Successfully.";
echo '</div>';
       
    } else {
        echo "Error  " . mysqli_error($con);
    }

?>
