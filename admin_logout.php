<?php
ob_start();
session_start();
if(isset($_SESSION['username'])) {
	session_destroy();
	unset($_SESSION['id']);
	unset($_SESSION['username']);
	header("Location: admin_login.php");
} else {
	header("Location: admin_login.php");
}
?>