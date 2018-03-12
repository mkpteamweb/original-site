<?php 
session_start();
unset($_SESSION['s_login']);
unset($_SESSION['name']);
unset($_SESSION["last_login"]);
session_destroy();
header("Location: login.php");
?>