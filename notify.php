<?php
session_start();
$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en" class="dashboard">
<head>
  <meta charset="UTF-8">
  <title>notify</title>
<link rel="stylesheet" href="css/booking.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<header role="banner">
  <?php if (isset($_SESSION['id'])) { ?>
  <h1><?php echo $_SESSION['username']; ?></h1>
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
    <h2>Notification</h2>
    <?php
	include_once "database.php";
	$sql="SELECT * FROM notify ";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)>0)
	{
	?>

	<?php
	while($row=mysqli_fetch_array($res))
	{
	
	
		print($row['message']); 
		print("&nbsp;");
		
		print($row['class']);
		print("&nbsp;");
		print($row['session']);
		print(".");

	}//end of while
	}//end of if
	else
	{
		print("No New Notification");
	}
	?>
	<form action="notify_valid2.php">
	<input type="submit" name="sub" value="Ok">
	</form>
  </section>
</main>
  <script  src="js/admin.js"></script>

</body>
</html>