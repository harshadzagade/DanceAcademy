<?php
	if(isset($_POST['sub']))
	{
		$id=$_POST['id'];
		$name=$_POST['name'];
		$dob=$_POST['dob'];
		$contact=$_POST['contact'];
		$prg=$_POST['program'];
		$session=$_POST['session'];
		$fees=$_POST['fees'];
	
		//print("$bid $date $time");
		
		//Step 1-Connect to db
	     include_once "database.php";
	
	    //Step 2-Create query  
	    $sql="UPDATE users SET name='$name',dob='$dob', contact='$contact',program='$prg', session='$session', fees='$fees' WHERE id='$id'";
		
		//Step 3-Execute query
	    $res=mysqli_query($conn,$sql);
		
		//step 4-Check $res
		if($res)
		{
			print("Record Updated<br>");
		}
		else//step 5= did not update
		{
			print("Could not Update</br>");
		}
		include_once "admin_users.php";
		
		
		
	}//end of if isset
?>