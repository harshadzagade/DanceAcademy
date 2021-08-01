<?php
	$id=$_GET['id'];
	include_once "database.php";
	$sql="DELETE FROM notify";
	$res=mysqli_query($conn,$sql);
	if($res)
	{
		echo"Deleted Successfully";
		include_once "notify.php";
		
	}
	else
	{
		echo "Could not delete".mysql_error($conn);
	}
?>