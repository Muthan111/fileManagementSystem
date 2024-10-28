<?php
include 'sessionTimeLogout.php';
include 'connectToDatabase.php';
$target_dir = "upload/";

if (isset($_FILES['file']) && $_FILES['file']['error'] == 0 && isset($_SESSION['id'])) {
    $filename = basename($_FILES["file"]["name"]);
    $targetPath = $target_dir . $filename;
    $id = htmlspecialchars($_SESSION['id']);
    $fileID = generateRandomID();

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath)) {
        $sql = "INSERT INTO files (fileId, fileName, filePath, userID) VALUES ('$fileID', '$filename', '$targetPath', '$id')";
        if ($conn->query($sql) === TRUE) {
            header("Location: uploadMessage.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    // Debugging statements
    if (!isset($_FILES['file'])) {
        echo "No file uploaded.";
    } elseif ($_FILES['file']['error'] != 0) {
        echo "File upload error: " . $_FILES['file']['error'];
    } elseif (!isset($_SESSION['id'])) {
        echo "User not logged in.";
        echo "Please <a href='userLogin.php'>Click Here</a> to log in.";
    } else {
        echo "Unknown error.";
    }
}

function generateRandomID() {
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $digits = '0123456789';
    
    $randomID = '';
    
    // Generate two uppercase letters
    for ($i = 0; $i < 2; $i++) {
        $randomID .= $letters[rand(0, strlen($letters) - 1)];
    }
    
    // Generate four digits
    for ($i = 0; $i < 4; $i++) {
        $randomID .= $digits[rand(0, strlen($digits) - 1)];
    }
    
    return $randomID;
}
?>