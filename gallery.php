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
	
<title>Gallery</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/gallery.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:600,900" rel="stylesheet">
	
</head>

<body>
	
<!--Nav BAr-->
<div class="topnav">
  <?php if (isset($_SESSION['id'])) { ?>
  <div class="dropdown">
    <button class="dropbtn"><?php echo $_SESSION['username']; ?> 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
	  <a href="user_booking.php">Your Bookings</a>
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
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
	  <a href="academy.php">Dance Academy</a>
      <a href="dance.php">Workshop</a>
    </div>
  </div>
  <a href="home.php">Home</a>
</div>
</div><br><br><br>
<!--Nav Bar End-->


<!--Gallery-->

<p class="heading">Gallery</p>
  <div class="gallery-image">
    <div class="img-box">
      <img src="image/g1.JPG" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Hunaar Haat</p>
          <p class="opacity-low">Show At Marines</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="image/g2.JPG" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Hunaar Haat 2nd Day</p>
          <p class="opacity-low">Show At Marines</p>
        </div>
      </div>
    </div>
    <div class="img-box">
      <img src="image/g3.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>International Show</p>
          <p class="opacity-low">At United States</p>
        </div>
      </div>
    </div>
    <div class="img-box">
      <img src="image/g4.jpeg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Battle</p>
          <p class="opacity-low">Andheri</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="image/g5.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Stage Performance</p>
          <p class="opacity-low">At Sion</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="image/g6.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Performance</p>
          <p class="opacity-low">American Theater</p>
        </div>
      </div> 
    </div>
	<div class="img-box">
      <img src="image/g7.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Ceremony</p>
          <p class="opacity-low">London DK Hall</p>
        </div>
      </div> 
    </div>
	<div class="img-box">
      <img src="image/g8.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Live Performance</p>
          <p class="opacity-low">Japan</p>
        </div>
      </div> 
    </div>
	<div class="img-box">
      <img src="image/g9.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Bollywood Show</p>
          <p class="opacity-low">BKC Bandra</p>
        </div>
      </div> 
    </div>
	<div class="img-box">
      <img src="image/g10.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Sony Awards</p>
          <p class="opacity-low">BKC Bandra</p>
        </div>
      </div> 
    </div>
	<div class="img-box">
      <img src="image/g11.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>ZEE Awards</p>
          <p class="opacity-low">Thane</p>
        </div>
      </div> 
    </div>
	<div class="img-box">
      <img src="image/g12.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>IIFA Awards</p>
          <p class="opacity-low">Dubai</p>
        </div>
      </div> 
    </div>
  </div>
	
<!--End Gallery-->

	


</body>
</html>
