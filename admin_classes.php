<!DOCTYPE html>
<html lang="en" class="dashboard">
<head>
  <meta charset="UTF-8">
  <title>Admin Classes</title>
<link rel="stylesheet" href="css/admin.css">
<link rel="stylesheet" href="css/admin_classes.css">


</head>
<body>
<header role="banner">
<h1>Admin</h1>
  <ul class="utilities">
    <li class="logout warn"><a href="admin_logout.php">Log Out</a></li>
  </ul>



<nav role="navigation">
  <ul class="main">
    <li class="write"><a href="admin_workshop.php">Workshop</a></li>
    <li class="edit"><a href="admin_classes.php">Classes</a></li>
    <li class="comments"><a href="admin_contact.php">Contact Details</a></li>
    <li class="comments"><a href="admin_feedback.php">User's Feedbacks</a></li>
    <li class="comments"><a href="admin_users.php">Manage Users</a></li>
  </ul>
</nav>

<section class="panel important">
    <h2>&nbsp;</h2>
  <form method="post" action="notify_valid.php">
    <div class="feedback-form">
		
			<h1>Update Class Sessions</h1>
			<div class="txtb">Message
			  <input type="text" name="msg" value="" placeholder="Message">
			</div>
		
			<div class="txtb">Class
			  <input type="text" name="class" value="" placeholder="Class Name">
			</div>

			<div class="txtb">Session
			  <input type="text" name="session" value="" placeholder="Session">
			</div>
		  <input type="submit" name="sub" value="SUBMIT" class="btn">
		</div>
</form>
  </section>
  <script  src="js/admin.js"></script>

</body>
</html>