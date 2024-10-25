<?php
session_start();
INCLUDE "connectToDatabase.php";

if(isset($_POST["Name"], $_POST["userName"], $_POST["passWord"], $_POST["Email"])){
    $fullName = validate($_POST['Name']);
    $userName = validate($_POST['userName']);
    $email = validate($_POST['Email']);
    $password = validate($_POST['passWord']);
    $password_pattern = '/^(?=.*[a-zA-Z])(?=.*\d).{8,}$/';
    $Full_Name_pattern ='/^[a-zA-ZÀ-ÿ\'\- ]+$/u';
    $ID = generateRandomID();
    $checkEmailQuery = "SELECT * FROM user WHERE Email = '$email'";
    $checkResult = mysqli_query($conn, $checkEmailQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        // Email already exists, redirect with an error message
        header("Location: userRegister.php?error=Email already exists");
        exit();
    }

    // if (!preg_match($Full_Name_pattern, $fullName)) {
    //     header("Location: userRegister.php?error=Name cannot contain numbers ");
    //     exit();
    // }
    // if (!preg_match($password_pattern, $password)) {
    //     header("Location: userRegister.php?error=Password is weak ");
    //     exit();
    // }
    if(empty($fullName)){
        header("Location: userRegister.php?error=Full Name is required ");
        exit();
    }elseif (empty($email)){
         header("Location: userRegister.php?error=Email is required ");
         exit();
    }     
    elseif(empty($userName)){
        header("Location: userRegister.php?error=Username is required ");
        exit();
    }elseif(empty($password)){
        header("Location: userRegister.php?error=Password is required ");
        exit();
    }

    

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    
    $sql = "INSERT INTO user (id,Name,userName, email, password) VALUES ('$ID','$fullName','$userName', '$email' , '$password')";
    $result = mysqli_query($conn,$sql);
    $userID = mysqli_insert_id($conn);

    

    // Check if both insertions were successful
    

    // if (!$result){
    //     echo "Insertion failure" . mysqli_error($conn);
    // }else {
    //          header("Location: registered.html");
    //          mysqli_close($conn);
    // }
    
    
    // $stmt = mysqli_prepare($conn, $sql);

    // if ($stmt) {
        
    //     mysqli_stmt_bind_param($stmt, "ssss", $fullName, $email,$userName ,$password );
        
        
    //     $result = mysqli_stmt_execute($stmt);

    //     if(!$result){
    //         echo "Insertion failure: " . mysqli_error($conn);
    //     } else {
    //         echo "<script>alert('You have succesfully registered');</script>";
    //     }
        
        
    //     mysqli_stmt_close($stmt);
    // } else {
    //     echo "Database error: " . mysqli_error($conn);
    // }
}

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function generateRandomID() {
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $digits = '0123456789';
    
    $randomID = '';
    
    // Generate two uppercase letters
    for ($i = 0; $i < 2; $i++) {
        $randomID .= $letters[rand(0, strlen($letters) - 1)];
    }
    
    // Generate three digits
    for ($i = 0; $i < 4; $i++) {
        $randomID .= $digits[rand(0, strlen($digits) - 1)];
    }
    
    return $randomID;
}
?>
