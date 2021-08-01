<?php

session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<style>
	body  
	{
  		background-image: url("image/dance-bg1.jpg");
  		
	}
	</style>

<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">

</head>

<body>
	
	<!--Nav BAr-->
<div class="topnav">
  <a href="" style="float:left" >ReUnited Dance Academy</a>
  <div class="topnav-right">
  <a href=""></a>
  <?php if (isset($_SESSION['id'])) { ?>
  <div class="dropdown">
    <button class="dropbtn"><?php echo $_SESSION['username']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    </button>
    <div class="dropdown-content">
	  <a href="users_booking.php">Your Bookings</a>
      <a href="logout.php">Logout</a>
    </div>
  </div>
  <?php } else { ?>
  <a href="login.php">Login</a>
  <?php } ?>
  <a href="aboutus.php">About Us</a>
  <a href="contactus.php">Contact Us</a>

  
  <a href="gallery.php">Gallery</a>
  <div class="dropdown">
    <button class="dropbtn">Dance 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
	  <a href="academy.php">Dance Academy</a>
      <a href="dance.php">Workshop</a>
    </div>
  </div>
  <a href="home.php">Home</a>
  </div>
</div>
</div><br><br><br>
	<!--Nav Bar End-->
<!--Bookings-->
<form method="post" action="contact_process.php">
		<div class="workshop-form">
		
			<h1> Contact Us </h1>
			<p>  ENTER DETAILS AND WE WILL GET BACK TO YOU </p>
			<div class="txtb">
				<label>Full Name :</label>
				<input type="text" name="name" value="" placeholder="Enter Your Name">
			</div>

			<div class="txtb">
				<label>Email :</label>
				<input type="email" name="email" value="" placeholder="Enter Your Email">
			</div>

			<div class="txtb">
				<label>Phone Number :</label>
				<input type="number" name="phone" value="" placeholder="Enter Your Phone Number">
			</div>

			<div class="txtb">
				<label>Your Comment :</label>
				<textarea name="message"></textarea>
			</div>
			<input type="submit" name="submit" value="SEND" class="btn">
		</div>
</form>
	<!--End Booking-->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
</body>
</html>
