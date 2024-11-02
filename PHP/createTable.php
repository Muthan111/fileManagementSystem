<?php
include "connectToDatabase.php";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if 'user' table exists
$sql = "SHOW TABLES LIKE 'user'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    // Create 'user' table if it does not exist
    $sql = "CREATE TABLE user (
        id CHAR(6) PRIMARY KEY,
        Name VARCHAR(50) NOT NULL,
        userName VARCHAR(50) NOT NULL UNIQUE,
        email VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        profilePicture VARCHAR(250)
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table 'user' created successfully<br>";
    } else {
        echo "Error creating table 'user': " . $conn->error . "<br>";
    }
} else {
    echo "Table 'user' already exists<br>";
}

// Check if 'files' table exists
$sql2 = "SHOW TABLES LIKE 'files'";
$result2 = $conn->query($sql2);

if ($result2->num_rows == 0) {
    // Create 'files' table if it does not exist
    $sql2 = "CREATE TABLE files (
        fileId CHAR(6) PRIMARY KEY,
        fileName VARCHAR(50) NOT NULL,
        filePath VARCHAR(50) NOT NULL UNIQUE,
        isFavourite Boolean,
        userID CHAR(6)
    )";

    if ($conn->query($sql2) === TRUE) {
        echo "Table 'files' created successfully<br>";
    } else {
        echo "Error creating table 'files': " . $conn->error . "<br>";
    }
} else {
    echo "Table 'files' already exists<br>";
}
$sql3 = "SHOW TABLES LIKE 'bin'";
$result3 = $conn->query($sql3);

if ($result3->num_rows == 0) {
    // Create 'files' table if it does not exist
    $sql3 = "CREATE TABLE bin (
        recycleId CHAR(6) PRIMARY KEY,
        DeletecFileName VARCHAR(50) NOT NULL,
        userID CHAR(6)
    )";

    if ($conn->query($sql3) === TRUE) {
        echo "Table 'bin' created successfully<br>";
    } else {
        echo "Error creating table 'files': " . $conn->error . "<br>";
    }
} else {
    echo "Table 'bin' already exists<br>";
}
$sql4 = "SHOW TABLES LIKE 'admin'";
$result = $conn->query($sql4);

if ($result->num_rows == 0) {
    // Create 'user' table if it does not exist
    $sql4 = "CREATE TABLE admin (
        adminId CHAR(6) PRIMARY KEY,
        Name VARCHAR(50) NOT NULL,
        userName VARCHAR(50) NOT NULL UNIQUE,
        email VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL
    )";

    if ($conn->query($sql4) === TRUE) {
        echo "Table 'admin' created successfully<br>";
    } else {
        echo "Error creating table 'admin': " . $conn->error . "<br>";
    }
} else {
    echo "Table 'admin' already exists<br>";
}
$conn->close();
?>