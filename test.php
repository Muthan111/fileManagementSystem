<?php 
        // continue.php
        session_start();
        if (isset($_SESSION['email']) && isset($_SESSION['Name']))
        {
            $username = htmlspecialchars($_SESSION['userName']);
            $email = htmlspecialchars($_SESSION['email']);
            $name = htmlspecialchars($_SESSION['Name']);
        }  
        else echo "Please <a href='userLogin.php'>Click Here</a> to log in.";
        if (isset($email)){
            echo $email; 
         }
         else{
            echo "Please log in";
         }

         ?>