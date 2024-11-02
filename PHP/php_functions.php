<?php
session_start();

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

