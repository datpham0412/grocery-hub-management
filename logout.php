<?php
session_start();

unset($_SESSION['loggedIN']);
session_destroy(); //destroy session and redirect to login page
header('Location: login.php');
exit();
?>
