<?php
include 'connectToDatabase.php';
$target_dir = "upload/";

if(isset($_FILES['file']) && $_FILES['file']['error']==0){
    $filename = basename($_FILES["file"]["name"]);
    $targetPath = $target_dir . $filename;

    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath)){
        $sql = "INSERT INTO files (name, path) VALUES ('$filename', '$targetPath')";
        if($conn->query($sql) === TRUE){
            echo "File uploaded and saved to DB";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    else {
        echo "Sorry, there was an error uploading your file.";
    }
}
else {
    echo "File not uploaded";
}
?>