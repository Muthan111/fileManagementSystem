<?php
session_start(); // Start the session at the beginning of the script
include "../Database/connectToDatabase.php";

if (isset($_POST["email"]) && isset($_POST["passWord"])) {
    $email = validate($_POST['email']);
    $password = validate($_POST['passWord']);
    
    if (empty($email)) {
        header("Location: userLogin.php?error=email is required");
        
        exit();
    } elseif (empty($password)) {
        header("Location: userLogin.php?error=Password is required");
        exit();

        
    } else {
        $sql = "SELECT * FROM user WHERE email ='$email' AND password = '$password' " ;
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)){
            $row = mysqli_fetch_assoc($result);
            
            
                $_SESSION['userName'] = $row['userName'];
                $_SESSION['Name'] = $row['Name'];
                $_SESSION['email']= $row['email'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['profilePicture'] = $row['profilePicture'];
                header(header: "Location: ../websiteFoundation/loggedIn.php");
                echo "Login Successful";
                echo $_SESSION['password'];
                exit();
            
        }   else {
                header("Location: ../userLogin/userLogin.php?error=Incorrect User name or password");
                exit();
        }
        
       
    }
} else {
    // header("Location: userlogin.php");
    echo "Login Failed";
    exit();
}
function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>
