<?php
include '../sessionManagment/sessionTimeLogout.php';
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 <title> Profile
 </title>
 <meta charset="utf-8"> 
 
 <link rel="stylesheet" href="../CSS/navbarCSS13.css">
    <link rel="stylesheet" type="text/css" href="../CSS/profile13.css">
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
    <div class= "divider">
      <div class = "left_side">
         <h4></h4>
         <img src = "../WEB-2202-Project/images/profile_icon.png">
         <H4>Name</H4>
         <p><?php 
        
       
        if (isset($_SESSION['email']) && isset($_SESSION['Name']))
        {
            $username = htmlspecialchars($_SESSION['userName']);
            $email = htmlspecialchars($_SESSION['email']);
            $name = htmlspecialchars($_SESSION['Name']);
            $password = htmlspecialchars($_SESSION['password']);
            $id = htmlspecialchars($_SESSION['id']);
            $phone = htmlspecialchars($_SESSION['phone']);
            $gender = htmlspecialchars($_SESSION['gender']);
            $date = htmlspecialchars($_SESSION['dateOfBirth']);
            $maritalStatus = htmlspecialchars($_SESSION['maritalStatus']);
            $address = htmlspecialchars($_SESSION['address']);
            $pp = htmlspecialchars($_SESSION['profilePicture']);
        }  
        else echo "Please <a href='../userLogin/userLogin.php'>Click Here</a> to log in.";
         ?></p>
      </div>
    
      <div class ="right_side">
         <div class = "information" >
            <h4>Information</h4>
            <div class = "info_data">
               <div class = "data">
                  <h4>Role</h4>
                  <p>Customer </p>
               </div>   

               <div class = "data">
               <h4>Email</h4>
                  <p><?php 
                  if (isset($email)){
                     echo $email; 
                  }
                  else{
                     echo "Please log in";
                  }
                  ?> </p>
               </div>  
            </div>
            <div class = "info_data">
               <div class = "data">
               <h4>Name</h4>
                  <p><?php 
                   
                  if (isset($name)){
                     echo $name; 
                  }
                  else{
                     echo "Please log in";
                  }
                  ?> </p>
               </div> 
               <div class = "data">
               <h4>User Name</h4>
                  <p><?php 
                   
                  if (isset($username)){
                     echo $username; 
                  }
                  else{
                     echo "Please log in";
                  }
                  ?> </p>
               </div> 
               


            </div>   
            <div class = "info_data">
               <div class = "data">
               <h4>password</h4>
                  <p><?php 
                  if (isset( $password)){
                     echo  $password; 
                  }
                  else{
                     echo "Please log in";
                  }
                 
                  ?> </p>
               </div> 
               <div class = "data">
               <h4>id</h4>
                  <p><?php 
                  if (isset($id)){
                     echo $id; 
                  }
                  else{
                     echo "Please log in";
                  }
                 
                  ?> </p>
               </div> 
               </div> 
            </div>
            <div class = "info_data">
               <div class = "data">
               <h4>phone/h4>
                  <p><?php 
                  if (isset( $phone)){
                     echo   $phone; 
                  }
                  else{
                     echo "Please log in";
                  }
                 
                  ?> </p>
               </div> 
               <div class = "data">
               <h4>id</h4>
                  <p><?php 
                  if (isset($gender)){
                     echo $gender; 
                  }
                  else{
                     echo "Please log in";
                  }
                 
                  ?> </p>
               </div> 
               </div> 
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
