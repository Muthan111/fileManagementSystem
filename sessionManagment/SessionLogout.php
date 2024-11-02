<?php
  session_start();

  if (isset($_SESSION['email']))
  {
    $email = htmlspecialchars($_SESSION['email']);
    
    destroy_session_and_data();
    
    echo "Thank you $email.";
    echo "You have logged out successfully. <br>";
    echo "Please <a href=../userLogin/userLogin.php>Click Here</a> to log in again.";
  }
  else echo "Please <a href='./userLogin/userLogin.php'>Click Here</a> to log in.";
  
  function destroy_session_and_data()
{
   //session_start();
   //$_SESSION = array();
  
   unset($_SESSION['email']);
   $_SESSION = array();
   session_unset();
   setcookie(session_name(), '', time() - 2592000, '/');
   session_destroy();
}
?>
