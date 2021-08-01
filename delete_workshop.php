<?php
	$id=$_GET['id'];
	
	

	include_once "database.php";
	$sql="DELETE FROM workshop where id='$id'";
	$res=mysqli_query($conn,$sql);
	if($res)
	{
		echo"Deleted Successfully";
		include_once "admin_workshop.php";
		
	}
	else
	{
		echo "Could not delete".mysql_error($conn);
	}
?>