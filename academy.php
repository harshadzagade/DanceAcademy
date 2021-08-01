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
	<link rel="stylesheet" type="text/css" href="css/academy.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:600,900" rel="stylesheet">
	
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
	
<!--Choose Class-->	

<p class="heading">Program</p>
  <div class="gallery-image">
	<a href="profesional_training.php">
    <div class="img-box">
      <img src="image/g1.JPG" alt="" />
      <div class="transparent-box">
        <div class="text">
          <p>Profesional Training Program</p>
        </div>
      </div> 
	</div></a>
	<a href="basic_training.php">
    <div class="img-box">
      <img src="image/g2.JPG" alt="" />
      <div class="transparent-box">
        <div class="text">
		<p>Basic Training Program&nbsp;</p>
        </div>
      </div>
    </div></a>
  </div>
<!--End Choose Class-->
	




<script src="js/index.js"></script>
</body>
</html>
