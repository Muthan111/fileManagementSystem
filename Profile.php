<?php

?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 <title> Profile
 </title>
 <meta charset="utf-8"> 
 
 <link rel = "stylesheet" type ="text/css" href = "profile.css">
 <link rel = "stylesheet" type ="text/css" href = "navbarCSS.css">
 </head>
 <body>
 <nav>
    <!-- The sidebar -->  
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="Home.php">Home</a>
      <a href="myfiles.php">Myfiles</a>
      
      <a href="Favourites.php">Favourites</a>
      <a href="Recycle.php">Recycle</a>
      <a href="Contact.php">Contact</a>
      <a href="Profile.php">Profile</a>
      <!-- <a href="Profile.html">Profile</a> -->
  </div>
  
  <!-- Use any element to open the sidenav -->
  <span onclick="openNav()">Click here to open</span>
  
  <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
  <div id="main">
      ...
  </div>
</nav>
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
