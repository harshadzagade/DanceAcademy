<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="css/register.css">

</head>
<body>
<!-- partial:index.partial.html -->
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

<div class="login">
  <h2 class="active"> Sign Up </h2>
  <form method="POST" action="reg_valid.php">
   

    <input type="text" class="text" name="uname">
     <span>username</span>

    <br>
    
    <br>

    <input type="password" class="text" name="pwd">
    <span>password</span>
    <br>
    
    <button class="signin" name="sub">
      Sign In
    </button>
	  
    <a href="login.php" style="font-style: bold">Already Registered. Log In</a>

  </form>

</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>