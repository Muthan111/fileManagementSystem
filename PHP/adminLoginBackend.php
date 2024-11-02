<?php
session_start(); // Start the session at the beginning of the script
include "connectToDatabase.php";

if (isset($_POST["adminId"]) && isset($_POST["passWord"])) {
    $adminId = validate($_POST['adminId']);
    $password = validate($_POST['passWord']);
    
    if (empty($adminId)) {
        header("Location: adminLogin.php?error=adminId is required");
        
        exit();
    } elseif (empty($password)) {
        header("Location: adminLogin.php?error=Password is required");
        exit();

        
    } else {
        $sql = "SELECT * FROM admin WHERE adminId ='$adminId' AND password = '$password' " ;
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)){
            $row = mysqli_fetch_assoc($result);
            
            
                $_SESSION['userName'] = $row['userName'];
                $_SESSION['Name'] = $row['Name'];
                $_SESSION['email']= $row['email'];
                $_SESSION['adminId'] = $row['adminId'];
                header(header: "Location: adminDashboard.php");
                echo "Login Successful";
                exit();
            
        }   else {
                header("Location: adminLogin.php?error=Incorrect User name or password");
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
