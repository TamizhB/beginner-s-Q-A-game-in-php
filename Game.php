<?php
include('session.php');
if (isset($_POST['submit'])) 
{
?>
<!DOCTYPE html>
<html>
<head>
<title>you are in!!!</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome: <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "details";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql="select level from profile where username='$login_session' and password='$login_pass'";
$result=mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$level=$row['level'];
$level=$level+1;
$sql="select * from question where level='$level'";
$result=mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$ques=$row['ques'];
$opt1=$row['opt1'];
$opt2=$row['opt2'];
$opt3=$row['opt3'];
$opt4=$row['opt4'];

$sql="update profile set level='$level' where username='$login_session' and password='$login_pass'";
$result=mysqli_query($conn, $sql);?>
<style type="text/css">
h1{color:Blue;font-size:40px;align="center";font-family:agency fb;}
h3{color:white;font-size:60px;align="center";font-family:agency fb;}
h4{color:white;font-size:40px;align="center";font-family:agency fb;}

</style>

</head>
<body background="background.jpg">

<div id="ques" >
<h1><center><?php echo " Level-$level " ?></center></h1>

<form action="anscheck.php"  method="POST">

<h3><?php echo " $ques " ?></h3><br>
<h4>
<input type="radio" name="ans" value="opt1"><?php echo " $opt1 " ?>
<br />
<input type="radio" name="ans" value="opt2" ><?php echo " $opt2 " ?> 
<br />
<input type="radio" name="ans" value="opt3" ><?php echo " $opt3 " ?>
<br />
<input type="radio" name="ans" value="opt4" ><?php echo " $opt4 " ?>
<br />
</h4>
<input type="submit" name="submit" value="Submit">

</form>

</div>
<?php  }  ?>
</body>
</html>
