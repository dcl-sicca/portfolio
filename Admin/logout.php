<?php
session_start();

// Deleting session and session variables
$_SESSION = array();
session_unset();
session_destroy();

// TODO
// Deleting automatic login cookies
// setcookie('login', '');
// setcookie('pass_hache', '');
// setcookie('password_hache', '');

header ('location: login.php');
exit();
?>