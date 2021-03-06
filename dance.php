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
	
<title>Dance</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/dance.css">
	<link rel="stylesheet" type="text/css" href="css/gallery.css">
	
	
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

<!--Workshops-->	
<p class="heading">Our Workshops</p>
  <div class="gallery-image">
    <div class="img-box">
      <img src="image/w1.JPG" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Exclusive Dance Workshop</p>
          <p class="opacity-low">Exclusive dance workshop conducted by bollywood choreographer and DID fame Shakti Mohan at reUnited Dance School which was part of Nritya Shakti Dance Tour.</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="image/w2.JPG" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Aspire Dance Tour</p>
          <p class="opacity-low">First ever dance tour of ReUnited which was conducted in multiple cities like Delhi, Mumbai, Ahmedabad, Kerala, Chennai, Kolkata, Bangalore and Sonipat.</p>
        </div>
      </div>
    </div>
    <div class="img-box">
      <img src="image/w3.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Frolic Weekend</p>
          <p class="opacity-low">A series of workshop conducted by some of our talented crew members on the occasion of International Dance Day with some greet and meet session at ReUnited Dance School.</p>
        </div>
      </div>
    </div>
    <div class="img-box">
      <img src="image/w4.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Zumba Fitness Workshop</p>
          <p class="opacity-low">Zumba fitness events conducted by our licensed Zumba Instructors at Kings United Dance School.</p>
        </div>
      </div> 
    </div>
  </div>
<!--End Workshops-->	
	
<!--Bookings-->
<form method="post" action="workshop_process.php">
		<div class="workshop-form">
		
			<h1> WANT TO JOIN OUR WORKSHOPS </h1>
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


</body>
</html>
