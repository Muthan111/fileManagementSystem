<?php
session_start();
include '../Database/connectToDatabase.php';
if (isset($_GET['file']) ) {
    $file = $_GET['file'];
    $userId = htmlspecialchars($_SESSION['id']);
   $sql = "UPDATE files SET isFavourite = 1 WHERE filePath='$file'";
    if ($conn->query($sql) === TRUE) {
        
        echo "File marked as favourite.<br>";
        exit();
    } else {
        echo "Error marking file as favourite: " . $conn->error;
    }
    echo $file;
}
?>