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
	<link rel="stylesheet" type="text/css" href="css/final.css">
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
      <a href="faculty.php">Faculty</a>
    </div>
  </div>
  <a href="home.php">Home</a>
  </div>
</div>
</div><br><br><br>
<!--Nav Bar End-->
	
<div class="about">
	<form method="POST" action="final_valid.php">
			<div class="input_field radio_option" style="color: white">Select Your Program
              <input type="radio" name="radiogroup1" value=" Kids RTP "> Kid's RTP
			
              <input type="radio" name="radiogroup1" value=" Lils Master RTP " > Lil's Master RTP
		
			  <input type="radio" name="radiogroup1" value=" Bollywood RTP " > Bollywood RTP
			 
            </div><br><br>
            <div class="input_field select_option" style="color: white">Select Your Session&nbsp;
                <select name="s1">
                  <option value=" Sat-Sun 3 to 4PM ">Sat-Sun 3 to 4PM</option>
                  <option value=" Sat-Sun 5 to 6PM " >Sat-Sun 5 to 6PM</option>
                </select>
                <div class="select_arrow"></div>
            </div><br><br>
			<div class="input_field radio_option" style="color: white">Fees:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" name="radiogroup2" value="15000" checked > 15000
			  
            </div><br><br>
			<input class="button" type="submit" name="sub" value="Apply Now" />
		</form>
</div>
<br><br>
	
	
</body>
</html>
