<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="navbarCSS.css">
    <link rel="stylesheet" type="text/css" href="profile.css">
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
    <div class= "divider">
      <div class = "left_side">
         <h4></h4>
         <!-- <img src = "../WEB-2202-Project/images/profile_icon.png"> -->
         <H4>Name</H4>
         <p><?php 
        // continue.php
        session_start();
        if (isset($_SESSION['email']) && isset($_SESSION['Name']))
        {
            $username = htmlspecialchars($_SESSION['userName']);
            $email = htmlspecialchars($_SESSION['email']);
            $name = htmlspecialchars($_SESSION['Name']);
        }  
        else echo "Please <a href='userLogin.php'>Click Here</a> to log in.";
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
               <h4>username</h4>
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
            </div>
         </div>   
      </div>  
   </div>  
   <script src="navbarScript.js"></script> 
 </body>   
</html>
