<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Status</title>
    <link rel="stylesheet" href="../CSS/deleteMessageStyles.css">
    <link rel="stylesheet" href="../CSS/navbarCSS12.css">
</head>
<body>
<nav id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../websiteFoundation/Home.php">Home</a>
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
    <div class="message-container">
        <?php
        session_start();
        
        if (!isset($_GET['file']) ) {
            echo "<h1>Delete Successful</h1>";
            echo "<p>Your file has been deleted successfully.</p>";
            // Unset the session variable to prevent message from showing again on refresh
            // unset($_SESSION['file']);
        } else {
            echo "<h1>Delete Failed</h1>";
            echo "<p>There was an error deleting your file. Please try again.</p>";
        }
        // ?>
        <a href="myfiles.php">Go back to My Files</a>
    </div>
    <script src="../navbarScript1.js"></script>
</body>
</html>