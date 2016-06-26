<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Score board</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<style>
h2{color:Red;font-size:40px;align="center";font-family:agency fb;}
</style>
<div id="score">
<h2><u>Score Board</u></h2>
<form action="logout.php" method="post">
<i><h1><?php echo $login_session; ?></h1></i><br />
<h3>Your score is</h3>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "details";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql="select score from profile where username='$login_session' and password='$login_pass'";
$result=mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$score=$row['score'];
echo"<i><h1>$score</h1></i>";?>
<input name="submit" type="submit" value=" Logout ">
</form>

<form action="leader.php" method="post">
<input name="submit" type="submit" value="view current leader ">
</form>
</div>
</div>
</body>
</html>
