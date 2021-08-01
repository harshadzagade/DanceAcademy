<?php
	if(isset($_POST['submit']))
	{
		session_start();
		
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$message=$_POST['message'];
		
		include_once "database.php";
		
		$sql="INSERT INTO workshop(id,name,email,phone,message) VALUES('','$name','$email','$phone','$message')";
		$res=mysqli_query($conn,$sql);
		
		if($res)
		{
			include_once "home.php";
		}
		else
		{
			print("Error! ".mysqli_error($conn));
		}
			
	}//end of if isset

?>
	