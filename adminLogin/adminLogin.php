<!DOCTYPE html>
<html lang="en">  
 <title>
 <head>
 <title> Login
 </title>
 
 <link rel = "stylesheet" type ="text/css" href = "../CSS/userLoginCSS.css">
 <link rel = "stylesheet" type ="text/css" href = "../CSS/navbarCSS12.css">
 <meta charset="utf-8">
</head>
<body>
<script src="navbarScript.js"></script>

  <div class = "flexbox">
    <h1>Admin Login</h1>
    <p>
    </p>
  </div> 
 <div class = "flex_container"> 
  
  <div class ="login">
      <h1>Enter your user details </h1>
      <form action ="adminLoginBackend.php"  method = "post">
          
            
          <!-- <label> Full Name </label>
          <input type = "text" name = "fullName" placeholder = "Enter your full name"> -->

          <!-- <label> Username </label>
          <input type = "text" name = "UserName" placeholder = "Enter your user name"> -->
          <?php if (isset($_GET['error'])) { ?>
              <p><?php echo $_GET['error']; ?></p>
          <?php } ?> 
          <label> Admin ID </label>
          <input type = "text" name = "adminId" placeholder = "Enter your ID">

          <label> Password </label>
          <input type ="password" name ="passWord" placeholder ="Enter your password">
          
          <button type = "submit"> Login </button>
      </form>
      
      
  </div>    
</div> 
<script src="../navbarScript1.js"></script> 
</body>
</html> 