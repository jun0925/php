<?php 
// Initialize the session
session_start();

// Unset all of the session variables
$_SEESION = array();

// Destory the session.
session_destroy();

// $edirect to login page
header("location: login.php");
exit;
?>