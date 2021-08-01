<?php
	if(isset($_POST['sub']))
	{
		session_start();
		
		$name=$_POST['name'];
		$email=$_POST['email'];
		$dob = $_POST['dob'];
		$uname=$_POST['uname'];
		$pwd=$_POST['pwd'];
		$contact=$_POST['contact'];
		
		include_once "database.php";
		
		$sql="INSERT INTO `users`(`id`, `name`, `email`,`dob`, `username`, `password`, `contact`) VALUES('','$name','$email','$dob','$uname',md5($pwd), $contact)";
		$res=mysqli_query($conn,$sql);
		
		if($res)
		{
			include_once "login.php";
		}
		else
		{
			print("Error! ".mysqli_error($conn));
		}
			
			
	}//end of if isset

?>
	