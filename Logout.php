
<?php
include('session.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "details";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql="update profile set level='1' where username='$login_session' and password='$login_pass'";
$result=mysqli_query($conn, $sql);
session_start();
if(session_destroy()) 
{
header("Location: index.php");
}
?>
