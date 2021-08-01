<?php
	$id=$_GET['id'];
	
	

	include_once "database.php";
	$sql="DELETE FROM users where id='$id'";
	$res=mysqli_query($conn,$sql);
	if($res)
	{
		echo"Deleted Successfully";
		include_once "admin_users.php";
		
	}
	else
	{
		echo "Could not delete".mysql_error($conn);
	}
?>