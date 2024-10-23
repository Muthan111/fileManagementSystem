<?php
include 'connectToDatabase.php';
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    // $sql = "DELETE FROM files WHERE path='$file'";
    // if ($conn->query($sql) === TRUE) {
    //     if (file_exists($file)) {
    //         unlink($file);
    //         echo "File deleted successfully.";
    //     } else {
    //         echo "File not found.";
    //     }
    // } else {
    //     echo "Error deleting file: " . $conn->error;
    // }
    echo $file;
} else {
    echo "No file specified.";
}
?>