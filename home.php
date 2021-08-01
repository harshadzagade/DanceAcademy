<?php
ERROR_REPORTING(E_ALL^E_NOTICE);
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
	  <a href="feedback.php">Feedback</a>
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
     
    </div>
  </div>
  <a href="home.php">Home</a>
  </div>
</div>
</div><br><br><br>
<!--Nav Bar End-->

<div class="article">
	<h2>WELCOME</h2>
		 <p>
			Welcome to ReUnited Dance Academy!  We have been teaching Indian dance in Chicago south-west sururb areas for 5years 
  and are proud to be the premier dance classes in the Mumbai.  </p>
		 <p>Our class is offering range from 
            classical Bharatanatyam to energetic Bollywood dance classes for kids, teenage and adults in Mumbai, IL. 
			We also offer private lessons for weddings and other events. </p>
		 <p>We guarantee we will find a perfect class for you, 
			so come check out one of the most unique dance class! </p>
	<h2>ReUnited MOTIVE</h2>
		<p>
			ReUnited&#39s main motive is to educate student in dancce with the confidence. 
			We expect our student to achieve the stage of perfection that makes him/her 
			a complete dance artist.
  </p>
		<p>
			In other words, ReUnited looks for authorize students, artists and audiences 
            with the gear to be inspired, interested, positive and sympathetic in their 
            regular interface with the world through fineness in all kind of dance 
            teaching and performance.
  </p>
	<h3>Find your perfect <a href="dance.php">class here</a></h3>
</div>
	

<!--Slideshow-->
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="image/a1.jpg" style="width:100%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="image/a3.jpg" style="width:100%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="image/a4.JPG" style="width:100%">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<!--End Slide Show-->


<!--About Us-->
<!--	<footer class="footer-distributed">
 
			<div class="footer-left">
          <img src="image/logo.png">
			<h3>About<span>ReUnited Academy</span></h3>
 
				<p class="footer-links">
					<a href="home.php">Home</a>
					|
					<a href="academy.php">Dance</a>
					|
					<a href="aboutus.php">About</a>
					|
					<a href="contactus.php">Contact</a>
				</p>
 
				<p class="footer-company-name">© 2019 ReUnited Dance Pvt. Ltd.</p>
			</div>
 
			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					  <p><span>309 - Rupa Solitaire,
						 Bldg. No. A - 1, Sector - 1</span>
						Mahape, Navi Mumbai - 400710</p>
				</div>
 
				<div>
					<i class="fa fa-phone"></i>
					<p>+91 22-27782003</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:reduniteddanceacademy@gmail.com">reuniteddanceacademy</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the ReUnited Dance Academy</span>
					We offer training and skill building.</p>
				<div class="footer-icons">
					<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
					<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
					<a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
				</div>
			</div>
</footer>
-->

<script src="js/index.js"></script>
</body>
</html>
