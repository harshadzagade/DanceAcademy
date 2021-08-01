<?php 

	if (isset($_POST['sub'])) {
		
		session_start();

		$uname = $_POST['uname'];
		$pwd = $_POST['pwd'];
		
		include_once "database.php";
		
		$sql = "SELECT * FROM admin WHERE username='$uname' AND password= $pwd";
		$result = mysqli_query($conn, $sql);

		if ($row = mysqli_fetch_array($result)) {
		$_SESSION['id'] = $row['id'];
		$_SESSION['username'] = $row['username'];		
		header("Location: admin_workshop.php");
	} else {
		$error_message = "Incorrect Email or Password!!!";
	}
	}
?>