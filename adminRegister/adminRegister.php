<!DOCTYPE html>
<head>
    <meta charset = "utf-8">
    <title> Registration Page</title>
    
    <link rel = "stylesheet" type ="text/css" href = "../CSS/userRegisterCSS.css">
    <link rel = "stylesheet" type ="text/css" href = "../CSS/navbarCSS.css">
</head>
<body>
<script src="../navbarScript1.js"></script> 
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
  <div class  = "flexbox" >
    <h1>Please register your details</h1>
      <p> Enter your name, username, email and password</p>
   </div>
  <div class = "flex_container">
  
    <div class = "register">
        <h1> Customer: Enter your details </h1>
        <h1> Register</h1>
        <form action = 'adminRegisterBackend.php'  method ='post'>
          <?php if (isset($_GET['error'])){ ?>
                <p class = "error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label>Admin Id</label>
            <input type ="Id" name ="Id" placeholder = "Admin Id" id = "Admin_d"  >
            <label>Full Name</label>
            <input type ="Name" name ="Name" placeholder = "Name" id = "Name"  >
            <label>Email</label>
            <input type ="email" name ="Email" placeholder = "Email" id = "Email" >
            <label> User Name</label>
            <input type = "text" name=" userName" placeholder= "Username" id="userName" >
            <label>Password</label>
            <input type ="password" name ="passWord" placeholder = "passWord" id = "passWord" >
            <input type = "submit" value="Register">
            
        </form>
        <!-- <a href = "user_login_page.php">
      <button class = "outer_button" type = "submit"> Login </button>
      </a> -->
        
    </div>
  </div>  
  
</body>
</html>