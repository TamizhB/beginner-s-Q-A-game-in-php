<?php
include('login.php'); 
include('signup.php'); 
if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Home page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body background="background.jpg">
<h1><center>Welcome to crazy quiz...</center></h1>
<div id="main">

<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">

<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
<div id="signup">
<h2>Signup Form</h2>
<form method="POST" action="" enctype="multipart/form-data">
<label>UserName :</label>
<input id="name" name="susername" placeholder="yourname" type="text">
<label>Email-Id:</label>
<input id="email" name="Email" placeholder="your Email-id" type="text">
<label>Age :</label>
<input id="Age" name="Age" placeholder="your age" type="text">
<label>Password :</label>
<input id="password" name="spassword" placeholder="**********" type="password">
<label>Re-enter Password :</label>
<input id="rpassword" name="rpassword" placeholder="**********" type="password">
<label>Your Image(*optional):</label>
<form method="POST" action="signup.php" enctype="multipart/form-data">
<input type="file" name="myimage">
<input type="submit" name="signup" value="Ok Done!">
</form>
</body>
</html>
<span><?php echo $error1; ?></span>
</form>
</div>

</div>
</body>
</html>
