<?php
include 'sessionTimeLogout.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Form</title>
    <link rel="stylesheet" href="navbarCSS12.css">
    <link rel="stylesheet" href="uploadFormCSS.css">
</head>
<body>
    <nav id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="Home.php">Home</a>
        <a href="javascript:void(0)" class="dropdown-btn">Files</a>
        <div class="dropdown-container">
            <a href="uploadForm.php">Upload Files</a>
            <a href="myfiles.php">My Files</a>
        </div>
        <a href="Favourites.php">Favourites</a>
        <a href="Recycle.php">Recycle</a>
        <a href="Contact.php">Contact</a>
        <a href="Profile.php">Profile</a>
    </nav>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Open Navbar</span>

    <div class="form-container">
        <form action="uploadBackend.php" method="post" enctype="multipart/form-data">
            <h2>Select image to upload:</h2>
            <input type="file" name="file" required>
            <input type="submit" value="Upload">
        </form>
    </div>

    <script src="navbarScript1.js"></script>
</body>
</html>