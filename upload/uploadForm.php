<?php
include '../sessionManagment/sessionTimeLogout.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Form</title>
    <link rel="stylesheet" href="../CSS/navbarCSS13.css">
    <link rel="stylesheet" href="../CSS/uploadFormCSS.css">
    <link rel="stylesheet" href="../CSS/bottomBar.css">
</head>
<body>
<nav id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../websiteFoundation/index.php">Home</a>
        <a href="javascript:void(0)" class="dropdown-btn">Files</a>
        <div class="dropdown-container">
            <a href="../upload/uploadForm.php">Upload Files</a>
            <a href="../websiteFoundation/myfiles.php">My Files</a>
        </div>
        <a href="../websiteFoundation/Favourites.php">Favourites</a>
        <a href="../websiteFoundation/Recycle.php">Recycle</a>
        <a href="../websiteFoundation/Contact.php">Contact</a>
        <a href="javascript:void(0)" class="dropdown-btn" >Profile</a>
        <div class="dropdown-container">
        <a href="../websiteFoundation/Profile.php">View Profile</a>
            <a href="../userLogin/userLogin.php">Login</a>
            <a href="../userRegister/userRegister.php">Register</a>
            <a href="../adminLogin/adminLogin.php">Admin Login</a>
            <a href="../adminRegister/adminRegister.php">Admin Register</a>
            <a href="../admin/adminDashboard.php">Admin dashboard</a>
        </div>
        
        
    </nav>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Open Navbar</span>

    <div class="form-container">
        <form action="uploadBackend.php" method="post" enctype="multipart/form-data">
            <h2>Select image to upload:</h2>
            <input type="file" name="file" required>
            <input type="submit" value="Upload">
        </form>
    </div>
    <div class="bottom-bar">
        <p>&copy; 2023 Your Website. All rights reserved.</p>
        <a href="../websiteFoundation/PrivacyPolicy.php">Privacy Policy</a>
        <a href="../websiteFoundation/TermsOfService.php">Terms of Service</a>
    </div> 
    <script src="../navbarScript1.js"></script>
</body>
</html>
