<?php
session_start();

  if (isset($_SESSION['email']))
  {
    $name = htmlspecialchars($_SESSION['email']);
       
    $_SESSION['LAST_ACTIVITY'] = time();
  }
  



?>