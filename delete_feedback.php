<?php
	$id=$_GET['id'];
	print("Deleting id $id <br>");
	
	include_once "database.php";
	$sql="DELETE FROM feedback where id='$id'";
	$res=mysqli_query($conn,$sql);
	if($res)
	{
		echo"Deleted Successfully";
		include_once "admin_feedback.php";
		
	}
	else
	{
		echo "Could not delete".mysql_error($conn);
	}
?>