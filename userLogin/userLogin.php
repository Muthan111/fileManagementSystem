<!DOCTYPE html>
<html lang="en">  
 <title>
 <head>
 <title> Login
 </title>
 
 <link rel = "stylesheet" type ="text/css" href = "../CSS/userLoginCSS.css">
 <link rel = "stylesheet" type ="text/css" href = "../CSS/navbarCSS13.css">
 <meta charset="utf-8">
</head>
<body>
<script src="navbarScript.js"></script>
<nav id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../websiteFoundationHome.php">Home</a>
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
  <div class = "flexbox">
    <h1>User Login</h1>
    <p>
    </p>
  </div> 
 <div class = "flex_container"> 
  
  <div class ="login">
      <h1>Enter your user details </h1>
      <form action ="loginBackend.php"  method = "post">
          
            
          <!-- <label> Full Name </label>
          <input type = "text" name = "fullName" placeholder = "Enter your full name"> -->

          <!-- <label> Username </label>
          <input type = "text" name = "UserName" placeholder = "Enter your user name"> -->
          <?php if (isset($_GET['error'])) { ?>
              <p c><?php echo $_GET['error']; ?></p>
          <?php } ?> 
          <label> Email </label>
          <input type = "text" name = "email" placeholder = "Enter your email">

          <label> Password </label>
          <input type ="password" name ="passWord" placeholder ="Enter your password">
          
          <button type = "submit"> Login </button>
      </form>
      <a href="forgotPassword.php" class="forgot-password">Forgot Password?</a>
      
      
  </div>    
</div> 
<script src="../navbarScript1.js"></script> 
</body>
</html> 
