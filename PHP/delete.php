<?php
session_start();
include 'connectToDatabase.php';
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

function generateRandomID() {
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $digits = '0123456789';
    
    $randomID = '';
    
    // Generate two uppercase letters
    for ($i = 0; $i < 2; $i++) {
        $randomID .= $letters[rand(0, strlen($letters) - 1)];
    }
    
    // Generate three digits
    for ($i = 0; $i < 4; $i++) {
        $randomID .= $digits[rand(0, strlen($digits) - 1)];
    }
    
    return $randomID;
}
?>