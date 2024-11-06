<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register</title>
    
    <link rel = "stylesheet" type ="text/css" href = "../CSS/userRegisterCSS.css">
    <link rel = "stylesheet" type ="text/css" href = "../CSS/navbarCSS13.css">
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
    <div class="register">
        <h1> Customer: Enter your details </h1>
        <h1> Register</h1>
        <form action='userRegisterBackend.php' method='post'>
            <div class = "flex_container">
                <div class="flexbox">
                        <div class = "form-group">
                            <label for="Name">Full Name</label>
                            <input type="text" name="Name" placeholder="Name" id="Name">
                            <br>
                        </div>
                        <div class = "form-group">
                            <label for="Email">Email</label>
                            <input type="email" name="Email" placeholder="Email" id="Email">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="userName">User Name</label>
                            <input type="text" name="userName" placeholder="Username" id="userName">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="Phone">Phone</label>
                            <input type="text" name="Phone" placeholder="Phone" id="Phone">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="Gender">Gender</label>
                        <input type="text" name="Gender" placeholder="Gender" id="Gender">
                        <br>
                        </div>
                        <div class="form-group">
                            <label for="maritalStatus">Marital Status</label>
                        <input type="text" name="maritalStatus" placeholder="Marital Status" id="maritalStatus">
                        <br>
                        </div>
                        <div class="form-group">
                            <label for="dateOfBirth">Date of Birth</label>
                            <input type="text" name="dateOfBirth" placeholder="Date of Birth" id="dateOfBirth">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" placeholder="Address" id="address">
                            <br>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        <button type="submit">Register</button>
            </div>
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