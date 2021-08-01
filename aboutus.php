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
	
<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/dance_training.css">
	
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
    </button>
    <div class="dropdown-content">
	  <a href="academy.php">Dance Academy</a>
      <a href="dance.php">Workshop</a>
      <a href="faculty.php">Faculty</a>
    </div>
  </div>
  <a href="home.php">Home</a>
  </div>
</div>
</div><br><br><br>
<!--Nav Bar End-->
<div class="about">
	<h1>About Us</h1>
		<p>Regular Training Program is a proposition for learner’s who are seeking short term guidance in diverse dance 	programs & fitness programs where they find a new opportunity to get fit.
			Come and build your career with THE ReUnited!!!!!</p>
	    <iframe width="350" height="250" src="https://www.youtube.com/embed/5gCLQkRCq24"></iframe>&nbsp;&nbsp;&nbsp;&nbsp;
		<iframe width="350" height="250" align="left" src="https://www.youtube.com/embed/GZLmWVUiZOE"></iframe>
</div>

<script src="js/index.js"></script>
</body>
</html>
