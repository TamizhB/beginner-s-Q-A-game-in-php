<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "details";
$conn = mysqli_connect($servername, $user, $pass, $dbname);
session_start();
$user_check=$_SESSION['login_user'];
$sql = "select username,password from profile where username='$user_check'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$login_session =$row['username'];
$login_pass=$row['password'];
if(!isset($login_session)){
mysqli_close($conn); 
}
?>
