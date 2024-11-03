<?php
session_start();


function destroy_session_and_data() {
    unset($_SESSION['email']);
    $_SESSION = array();
    session_unset();
    setcookie(session_name(), '', time() - 2592000, '/');
    session_destroy();
}

if (isset($_SESSION['email'])) {
    $email = htmlspecialchars($_SESSION['email']);
    $timeout = 300; // Timeout duration in seconds
    
    
    if (isset($_SESSION['LAST_ACTIVITY']) && time() - $_SESSION['LAST_ACTIVITY'] > $timeout) {
        destroy_session_and_data();
        echo "<script>
                alert('Session timed out. Please log in again.');
                window.location.href = '../userLogin/userLogin.php';
              </script>";
        exit();
    } elseif(isset($_SESSION['LAST_ACTIVITY']) && time() - $_SESSION['LAST_ACTIVITY'] > ($timeout / 2) ) {
        echo "<script>
            alert('Hi <?php echo $email; ?>. Inactive for  2 minutes and 30 seconds will log you out.');
        </script>";
    }
    else {
        $_SESSION['LAST_ACTIVITY'] = time(); // Update last activity time stamp
    }
}
?>

