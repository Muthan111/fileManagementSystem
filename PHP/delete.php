<?php
session_start();
include 'connectToDatabase.php';
include 'php_functions.php';
if (isset($_GET['file']) ) {
    $file = $_GET['file'];
    $userId = htmlspecialchars($_SESSION['id']);
    $recycleId = generateRandomID();
    $sql = "DELETE FROM files WHERE filePath='$file'";
    $sql2 = "INSERT INTO bin (recycleId, DeletecFileName, userID) VALUES ('$recycleId', '$file',  '$userId')";
    
    
    if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) {
        // Debugging statement to check file deletion
        if (unlink($file)) {
            echo "File deleted from directory.<br>";
        } else {
            echo "Error deleting file from directory.<br>";
        }
        header("Location: deleteMessage.php");
        exit();
    } else {
        echo "Error deleting file: " . $conn->error;
    }
    echo $file;

    
    
} else {
    echo "No file specified.";
    
}


