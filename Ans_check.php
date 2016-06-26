<DOCTYPE html>
<head />
<title> ans check </title>
<body>
<?php
include('session.php');
if (isset($_POST['submit'])) {
if (empty($_POST['ans'])) 
{
echo"<h1> You didn't answer....sorry we consider this as wrong ans</h1>";
?>
<form action="score.php" method="post">
<input name="submit" type="submit" value=" Proceed... ">
<?php
}
else{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "details";

$ans=$_POST['ans'];
$conn=mysqli_connect($servername, $username, $password, $dbname);
$sql="select * from profile where username='$login_session' and password='$login_pass'";
$result=mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);
$level=$row["level"];
$score=$row["score"];
}

$sql="select ans from question where level='$level'";
$result=mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);
$c_ans=$row["ans"];
}
if($c_ans==$ans){
echo "<i><h1>Congrats you are advancing to the next level</h1></i>";
$score=$score+10;
$sql="update profile set score='$score' where username='$login_session' and password='$login_pass'";
$result=mysqli_query($conn, $sql);
?><form action="game.php" method="post">
<input name="submit" type="submit" value=" Proceed... "><?php

}
else{
echo"<i><h1>Sorry....</h1></i>";
echo "<h2>The correct option is '$c_ans'</h2>";
echo "<h2>Thank you...</h2>"
?><form action="score.php" method="post">
<input name="submit" type="submit" value=" Proceed... "><?php
}
 }
}
mysqli_close($conn);
?>
</body>
</html>