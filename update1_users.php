<!DOCTYPE html>
<html lang="en" class="dashboard">
<head>
  <meta charset="UTF-8">
  <title>Admin Feedback</title>
<link rel="stylesheet" href="css/admin.css">


</head>
<body>
<!-- partial:index.partial.html -->
<header role="banner">
<h1>Admin</h1>
  <ul class="utilities">
    <li class="logout warn"><a href="admin_logout.php">Log Out</a></li>
  </ul>



<nav role="navigation">
  <ul class="main">
    <li class="dashboard"><a href="admin.php">Dashboard</a></li>
    <li class="write"><a href="admin_workshop.php">Workshop</a></li>
    <li class="edit"><a href="admin_classes.php">Classes</a></li>
    <li class="comments"><a href="admin_contact.php">Contact Details</a></li>
    <li class="comments"><a href="admin_feedback.php">User's Feedbacks</a></li>
    <li class="comments"><a href="admin_users.php">Manage Users</a></li>
  </ul>
</nav>

<main role="main">
  <?php
		$id=$_GET['id'];
		print("Updating $id");
		
	   //Step 1-Connect to db
	     include_once "database.php";
	
	  //Step 2-Create query
	     $sql="SELECT * FROM users WHERE id='$id'";
	
	  //Step 3-Execute query
	    $res=mysqli_query($conn,$sql);
	
	//step 4-Extract the row from $res
	$rows=mysqli_fetch_array($res);
	?>
	<h1>Update User</h1>
	<form action="update2_users.php" method="POST">
	Id:<input type="text" name="id" value="<?php echo $rows['id'] ?>"><br><br>
	Name:<input type="text" name="name" value="<?php echo $rows['name'] ?>"><br><br>
	DOB:<input type="text" name="dob" value="<?php echo $rows['dob'] ?>"><br><br>
	Number:<input type="text" name="contact" value="<?php echo $rows['contact'] ?>"><br><br>
	Program:<input type="text" name="program" value="<?php echo $rows['program'] ?>"><br><br>
	Session:<input type="text" name="session" value="<?php echo $rows['session'] ?>"><br><br>
	Fees:<input type="text" name="fees" value="<?php echo $rows['fees'] ?>"><br><br>
	
	<input type="submit" name="sub" value="Update" ><br><br>
	</form>

</main>
<!-- partial -->
  <script  src="js/admin.js"></script>

</body>
</html>