<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "filemanagementsystem";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if database exists
$db_check = mysqli_select_db($conn, $dbname);

if ($db_check) {
  echo "Database already exists.";
} else {
  // Create database
  $sql = "CREATE DATABASE $dbname";
  if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
  } else {
    echo "Error creating database: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>