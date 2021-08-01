<!DOCTYPE html>
<html lang="en" class="dashboard">
<head>
  <meta charset="UTF-8">
  <title>Admin</title>
<link rel="stylesheet" href="css/admin.css">


</head>
<body>
<header role="banner">
<h1>Admin</h1>
  <ul class="utilities">
    <li class="logout warn"><a href="admin_logout.php">Log Out</a></li>
  </ul>



<nav role="navigation">
  <ul class="main">
    
    <li class="write"><a href="admin_workshop.php">Workshop</a></li>
    <li class="edit"><a href="admin_classes.php">Classes</a></li>
    <li class="comments"><a href="admin_contact.php">Contact Details</a></li>
    <li class="comments"><a href="admin_feedback.php">User's Feedbacks</a></li>
    <li class="comments"><a href="admin_users.php">Manage Users</a></li>
  </ul>
</nav>

<main role="main">
  <section class="panel ">
    <h2>Manage Users</h2>
    <?php
	include_once "database.php";
	$sql="SELECT * FROM users";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)>0)
	{
	?>
		<table border='1'>
		<tr>
			<th>Id</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>DOB</th>
			<th>USERNAME</th>
			<th>PASSWORD</th>
			<th>CONTACT</th>
			<th>PROGRAM</th>
			<th>SESSION</th>
			<th>FEES</th>
			<th>Delete</th>
			<th>Update</th>
		</tr>
	<?php
	while($row=mysqli_fetch_array($res))
	{
		print("<tr>");
		print("<td>");
		print($row['id']);
		print("</td>");
		
		print("<td>");
		print($row['name']);
		print("</td>");
		
		print("<td>");
		print($row['email']);
		print("</td>");
		
		print("<td>");
		print($row['dob']);
		print("</td>");
		
		print("<td>");
		print($row['username']);
		print("</td>");
		
		print("<td>");
		print($row['password']);
		print("</td>");
		
		print("<td>");
		print($row['contact']);
		print("</td>");
		
		print("<td>");
		print($row['program']);
		print("</td>");
		
		print("<td>");
		print($row['session']);
		print("</td>");
		
		print("<td>");
		print($row['fees']);
		print("</td>");
		
		print("<td>");
		print("<a href='delete_users.php?id=$row[id]'>Delete</a>");
		print("</td>");
		
		print("<td>");
		print("<a href='update1_users.php?id=$row[id]'>Update</a>");
		print("</td>");
		
		print("</tr>");
	}//end of while
	}//end of if
	else
	{
		print("Table is empty!!!");
	}
	
	
	?>
  </section>
</main>
  <script  src="js/admin.js"></script>

</body>
</html>