<?php
	if (isset($_POST['sub'])) {
		
		session_start();

		$uname = $_POST['uname'];
		$pwd = $_POST['pwd'];
		
		include_once "database.php";
		
		$sql = "SELECT * FROM users WHERE username='$uname' AND password= md5($pwd)";
		$result = mysqli_query($conn, $sql);

		if ($row = mysqli_fetch_array($result)) {
		$_SESSION['id'] = $row['id'];
		$_SESSION['username'] = $row['username'];		
		header("Location: home.php");
	}
	else {
		
	}
	}
?>