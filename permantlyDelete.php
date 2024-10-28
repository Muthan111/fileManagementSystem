<?php
session_start();
include 'connectToDatabase.php';
if (isset($_GET['DeletecFileName'])) {
    $file = $_GET['DeletecFileName'];
    echo $file;
    // $sql = "DELETE FROM bin WHERE fileName='$file'";
    // if ($conn->query($sql) === TRUE) {
    //     echo "File deleted successfully.";
    // } else {
    //     echo "Error deleting file: " . $conn->error;
    // }
}
else {
    echo "No file specified.";
}
    ?>