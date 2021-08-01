<!DOCTYPE html>
<html lang="en" class="dashboard">
<head>
  <meta charset="UTF-8">
  <title>Admin Workshop</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'><link rel="stylesheet" href="css/admin.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

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
    <h2>Workshop Details</h2>
    <?php
	include_once "database.php";
	$sql="SELECT * FROM workshop";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)>0)
	{
	?>
		<table border='1'>
		<tr>
			<th>Id</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>PHONE</th>
			<th>MESSAGE</th>
			<th>DELETE</th>
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
		print($row['phone']);
		print("</td>");
		
		print("<td>");
		print($row['message']);
		print("</td>");
		
		print("<td>");
		print("<a href='delete_workshop.php?id=$row[id]'>Delete</a>");
		print("</td>");
		
		print("<td>");
		print("<a href='update1_workshop.php?id=$row[id]'>Update</a>");
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