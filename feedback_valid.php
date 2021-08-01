<?php
	if(isset($_POST['sub']))
	{
		session_start();
		
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$message=$_POST['message'];
		
		include_once "database.php";
		
		$sql="INSERT INTO feedback(id,name,email,phone,message) VALUES('','$name','$email','$phone','$message')";
		$res=mysqli_query($conn,$sql);
		
		if($res)
		{
			include_once "feedback.php";
		}
			
	}//end of if isset

?>
	