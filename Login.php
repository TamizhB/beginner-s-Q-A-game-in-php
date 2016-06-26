<?php
session_start(); 
$error='';
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid...New user?please signup to proceed";

}
else
{

$username=$_POST['username'];
$password=$_POST['password'];
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "details";
$conn = mysqli_connect($servername, $user, $pass, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM profile where username='$username' and password='$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0) {
$_SESSION['login_user']=$username;
$_SESSION['login_pass']=$password;
header("location: profile.php");
} else {
$error = "Username or Password is invalid";
}
mysqli_close($conn);
}
}
?>
