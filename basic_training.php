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
	
<title>Training</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/dance_training.css">
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
	
<div class="about">
	<h1>About Us</h1>
		<p>Regular Training Program is a proposition for learner’s who are seeking short term guidance in diverse dance 	programs & fitness programs where they find a new opportunity to get fit.
			Come and build your career with THE ReUnited!!!!!</p>
	    <iframe width="350" height="250" src="https://www.youtube.com/embed/5gCLQkRCq24"></iframe>&nbsp;&nbsp;&nbsp;&nbsp;
		<iframe width="350" height="250" align="left" src="https://www.youtube.com/embed/GZLmWVUiZOE"></iframe>
</div>
<br><br>
	
&nbsp;&nbsp;&nbsp;<div class="row">
  <div class="column">
	<h2>How To Apply</h2>
		<p>&nbsp;&nbsp;We ask that dancers have at least basic knowledge and background of dance training. Please &nbsp;&nbsp;fill out the THE ReUnited Application Form that includes the following:</p>
		<ul>
			<li>Basic information and emergency contact.</li>
			<li>Previous training and performance experience.</li>
			<li>Proceed to payment.</li>
		</ul>
	</div>
  <div class="column">
		<h2>Payments</h2>
			<ul>
        <li>
            Kings dance school will notify you via email upon acceptance — you must have a valid email address.
        </li>
        <li>
            We accept credit cards (Visa, Master Card, Discover, or Amex).
        </li>
        <li>
            Or Mail checks/payment information and forms to:
            KINGS Dance Studio Andheri west.
        </li>
        <li>No refunds will be given for any absences.</li>
    </ul>
	</div>
</div><br><br><br>
	

	
<!--Choose Class-->	

<div class="grid">
		<div class="card">
			<figure>
					<img src="image/w4.jpg">
			</figure>
			<h2>Kids RTP</h2>
			<p>
			<ul>
				<li>Eligibility criteria: 3 to 7 years old</li>
				<li>1 Month Program</li>
				<li>Total 8 Sessions</li>
				<li>2 days a week</li>
				<li>ONLY ON WEEKENDS</li>
				<li>Duration 1 HOUR</li>
			</ul>
			<h3>Fees </h3>
			<div class="ribbon">
				<h3 class="ribbon-text">15000</h3>
			</div>
			</p>
			<a class="button" href="final.php">Apply Now</a>
		</div>
		<div class="card">
			<figure>
					<img src="image/w2.jpg">
			</figure>
			<h2>Lil Master RTP</h2>
			<p>
			<ul>
				<li>Eligibility criteria: 3 to 11 years old</li>
				<li>1 Month Program</li>
				<li>Total 8 Sessions</li>
				<li>2 days a week</li>
				<li>ONLY ON WEEKENDS</li>
				<li>Duration 1 HOUR</li>
			</ul>
			<h3>Fees </h3>
			<div class="ribbon">
				<h3 class="ribbon-text">15000</h3>
			</div>
			</p>
			<a class="button" href="final.php">Apply Now</a>
		</div>
		<div class="card">
			<figure>
					<img src="image/w3.jpg">
			</figure>
			<h2>Bollywood RTP</h2>
			<p>
			<ul>
				<li>Eligibility criteria: 12 years and above</li>
				<li>1 Month Program</li>
				<li>Total 12 Sessions</li>
				<li>3 days a week</li>
				<li>ONLY ON WEEKDAYS</li>
				<li>Duration 1 AND HALF HOURs</li>
			</ul>
			<h3>Fees </h3>
			<div class="ribbon">
				<h3 class="ribbon-text">15000</h3>
			</div>
			</p>
			<a class="button" href="final.php">Apply Now</a>
		</div>
	</div>
<!--End Choose Class-->
	
</body>
</html>
