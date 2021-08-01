<?php
session_start();
$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en" class="dashboard">
<head>
  <meta charset="UTF-8">
  <title>booking</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'><link rel="stylesheet" href="css/booking.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<header role="banner">
  <?php if (isset($_SESSION['id'])) { ?>
  <h1><a href="academy.php"><?php echo $_SESSION['username']; ?></a></h1>
  <ul class="utilities">
    <li class="logout warn"><a href="logout.php">Log Out</a></li>
	<?php } ?>
  </ul>
</header>

<nav role="navigation">
  <ul class="main">
    <li class="dashboard"><a href="users_booking.php">Your's Booking</a></li>
    <li class="write"><a href="notify.php">Notification</a></li>
  </ul>
</nav>

<main role="main">
  <section class="panel ">
    <h2>Yours Booking</h2>
    <?php
	include_once "database.php";
	$sql="SELECT * FROM users where id=$id";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)>0)
	{
	?>
		<table border='1'>
		<tr>
			<th>Id</th>
			<th>NAME</th>
			<th>PROGRAM</th>
			<th>SESSION</th>
			<th>FEES</th>
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
		print($row['program']);
		print("</td>");
		
		print("<td>");
		print($row['session']);
		print("</td>");
		
		print("<td>");
		print($row['fees']);
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
<footer role="contentinfo">Easy Admin Style by Melissa Cabral</footer>
<!-- partial -->
  <script  src="js/admin.js"></script>

</body>
</html>