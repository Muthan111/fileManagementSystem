<?php
session_start();
include '../DatabaseconnectToDatabase.php';

if (!isset($_SESSION['id'])) {
    header("Location: ../userLogin/userLogin.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['profilePicture'])) {
    $userId = $_SESSION['id'];
    $target_dir = "../websiteFoundation/upload/profile_pictures/";
    $target_file = $target_dir . basename($_FILES["profilePicture"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["profilePicture"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["profilePicture"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["profilePicture"]["tmp_name"], $target_file)) {
            // Update the user's profile picture path in the database
            $sql = "UPDATE user SET profilePicture = '$target_file' WHERE id = '$userId'";
            $result = mysqli_query($conn,$sql);
            
            if ($result) {
                echo "The file ". htmlspecialchars(basename($_FILES["profilePicture"]["name"])). " has been uploaded.";
                header("Location: Profile.php");
                exit();
            } else {
                echo "Sorry, there was an error updating your profile picture.";
            }

            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

$conn->close();
?>