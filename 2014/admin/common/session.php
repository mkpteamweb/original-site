<?php
session_start();
if ($_SESSION['s_login'] == "") {
	header("Location: ".$host."admin/login.php");
}
?>