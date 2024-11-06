<?php
include '../sessionManagment/sessionTimeLogout.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../CSS/navbarCSS13.css">
    <link rel="stylesheet" type="text/css" href="../CSS/profile12.css">
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
    <p><?php 
        
       
        if (isset($_SESSION['email']) && isset($_SESSION['Name']))
        {
            $username = htmlspecialchars($_SESSION['userName']);
            $email = htmlspecialchars($_SESSION['email']);
            $name = htmlspecialchars($_SESSION['Name']);
            $password = htmlspecialchars($_SESSION['password']);
            $id = htmlspecialchars($_SESSION['id']);
            $pp = htmlspecialchars($_SESSION['profilePicture']);
        }  
        else echo "Please <a href='../userLogin/userLogin.php'>Click Here</a> to log in.";
         ?></p>
    <div id="main">
        <h1>Profile</h1>
        <div class="profile-container">
        <div class="data">
                <h4>ID</h4>
                <p>
                    <?php 
                    if (isset($id)) {
                        echo $id; 
                    } else {
                        echo "Please log in";
                    }
                    ?>
                </p>
            </div>
            <div class="data">
                <h4>Name</h4>
                <p>
                    <?php 
                    if (isset($name)) {
                        echo $name; 
                    } else {
                        echo "Please log in";
                    }
                    ?>
                </p>
            </div>
            <div class="data">
                <h4>Username</h4>
                <p>
                    <?php 
                    if (isset($username)) {
                        echo $username; 
                    } else {
                        echo "Please log in";
                    }
                    ?>
                </p>
            </div>
            <div class="data">
                <h4>Name</h4>
                <p>
                    <?php 
                    if (isset( $email)) {
                        echo  $email; 
                    } else {
                        echo "Please log in";
                    }
                    ?>
                </p>
            </div>
            <div class="data">
                <h4>Name</h4>
                <p>
                    <?php 
                    if (isset( $password)) {
                        echo  $password; 
                    } else {
                        echo "Please log in";
                    }
                    ?>
                </p>
            </div>
            <div class="picture-frame">
            <h4>Profile Picture</h4>
            <?php if ($pp): ?>
                <img src="<?php echo $pp; ?>" alt="Profile Picture" class="profile-picture">
            <?php else: ?>
                <img src="../upload/profile_pictures/linkedinphp.jpg" alt="Placeholder Picture" class="profile-picture">
            <?php endif; ?>
            <h4>Upload Profile Picture</h4>
            <form action="uploadProfilePicture.php" method="post" enctype="multipart/form-data">
                <input type="file" name="profilePicture" accept="image/*">
                <button type="submit">Upload</button>
            </form>
            </div>
            
        </div>
        </div>
    </div>
    <div class="bottom-bar">
        <p>&copy; 2023 Your Website. All rights reserved.</p>
        <a href="../websiteFoundation/PrivacyPolicy.php">Privacy Policy</a>
        <a href="../websiteFoundation/TermsOfService.php">Terms of Service</a>
    </div>  
   <script src="../navbarScript1.js"></script> 
 </body>   
</html>
