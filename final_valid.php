<?php
	session_start();

	if(isset($_POST['sub']))
	{
		$id=$_SESSION['id'];
		$prg=$_POST['radiogroup1'];
		$ch=$_POST['s1'];
		$fees=$_POST['radiogroup2'];
	
		//print("$bid $date $time");
		
		
		//Step 1-Connect to db
	     include_once "database.php";
	
	    //Step 2-Create query
	    $sql="UPDATE users SET program='$prg',session='$ch',fees='$fees' WHERE id=$id";
		
		//Step 3-Execute query
	    $res=mysqli_query($conn,$sql);
		
		//step 4-Check $res
		if($res)
		{
			print("<br>");
		}
		else//step 5= did not update
		{
			print("Could not Update</br>");
		}
		include_once "payment.php";
		
		
		
	}//end of if isset
?>