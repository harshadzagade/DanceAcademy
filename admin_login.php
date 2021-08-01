<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>LogIn</title>
  <link rel="stylesheet" href="css/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

<div class="login">
  <h2 class="active"> sign in  </h2>
  <form action="admin_valid.php" method="POST">
   
    

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


    <hr>

    <a href="register.php">New User. Create an Account Here</a>
  </form>

</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>