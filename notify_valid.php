<?php
	if(isset($_POST['sub']))
	{
		session_start();
		
		$msg=$_POST['msg'];
		$class=$_POST['class'];
		$session=$_POST['session'];
		$message=$_POST['message'];
		
		include_once "database.php";
		
		$sql="INSERT INTO notify(id,message,class,session) VALUES('','$msg','$class','$session')";
		$res=mysqli_query($conn,$sql);
		
		if($res)
		{
			include_once("admin_classes.php");
		}
			
	}//end of if isset

?>
	