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
    <li class="write"><a href="admin_workshop.php">Workshop</a></li>
    <li class="edit"><a href="admin_classes.php">Classes</a></li>
    <li class="comments"><a href="admin_contact.php">Contact Details</a></li>
    <li class="comments"><a href="admin_feedback.php">User's Feedbacks</a></li>
    <li class="comments"><a href="admin_users.php">Manage Users</a></li>
  </ul>
</nav>

<main role="main">
  <section class="panel ">
    <h2>User's Feedback</h2>
    <?php
	include_once "database.php";
	$sql="SELECT * FROM feedback";
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
		print("<a href='delete_feedback.php?id=$row[id]'>Delete</a>");
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
<!-- partial -->
  <script  src="js/admin.js"></script>

</body>
</html>