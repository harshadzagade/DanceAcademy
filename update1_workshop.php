<html>
	<head>
		<title>Update</title>
	</head>
	<body>
	<?php
		$id=$_GET['id'];
		print("Updating $id");
		
	   //Step 1-Connect to db
	     include_once "database.php";
	
	  //Step 2-Create query
	     $sql="SELECT * FROM workshop WHERE id='$id'";
	
	  //Step 3-Execute query
	    $res=mysqli_query($conn,$sql);
	
	//step 4-Extract the row from $res
	$rows=mysqli_fetch_array($res);
	?>
	<h1>Updating Record</h1>
	<form action="update2_workshop.php" method="POST">
	Id:<input type="text" name="id" value="<?php echo $rows['id'] ?>"><br><br>
	Name:<input type="text" name="name" value="<?php echo $rows['name'] ?>"><br><br>
	Number:<input type="text" name="phone" value="<?php echo $rows['phone'] ?>"><br><br>
	
	<input type="submit" name="sub" value="Update" ><br><br>
	</form>
	
	</body>
</html>	