<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
  <style>body {
      font-family: Arial, sans-serif;
    }
    .container {
      width: 300px;
      margin: 50px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      display: block;
      margin-bottom: 10px;
    }
    .form-group input {
      width: 95%;
      height: 40px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .btn {
      width: 100%;
      height: 40px;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 20px;
      
    }
    .btn:hover {
      background-color: #3e8e41;
    }
    .reset-button {
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      border-radius: 4px;
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
      margin-top: 20px;
    }

    .reset-button:hover {
      background-color: #45a049;
    }
    .button-container {
      text-align: center;
      margin-top: 40px;
    }
    .container {
      width: 50%;
      margin: auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    </style>
</head>
<body>
  <div class="container">
    <h2>Reset Password</h2>
<form action="" method="post">
      <div class="form-group">
        <label for="password">Enter password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit" name="submit" class="btn">Submit</button>
      </div>
    </form>
    
</body>
</html>

<?php
session_start();
INCLUDE "../Database/connectToDatabase.php";
if (isset($_GET['email'])) {
    $_SESSION['email'] = $_GET['email'];
}

if (isset($_SESSION['email']) && isset($_POST['submit'])) {
    $password = $_POST['password'];
    $foundEmail = $_SESSION['email'];
    $SQL = "UPDATE user SET password = '$password' WHERE email = '$foundEmail'";
    $result = $conn->query($SQL);
    
    if ($result) {
        echo "<p>Password reset successfully.</p>";
        header("Location: userLogin.php");
    } else {
        echo "<p>Password reset failed.</p>";
    }
    


}
?>
