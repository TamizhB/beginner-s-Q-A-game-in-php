<Doctype html>
<head>
<title>signing up</title>
<?php

$error1=''  ;
if (isset($_POST['signup'])) {
if (empty($_POST['susername']) || empty($_POST['spassword']) || empty($_POST['Age'])|| empty($_POST['Email'])|| empty($_POST['rpassword'])) {
$error1 = "Please Enter the details....";
}else
if ($_POST['spassword'] !=$_POST['rpassword'])
{
$error1 = "passwords doesn't match...Enter again";
}
else{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "details";
$name=$_POST['susername'];
$email=$_POST['Email'];
$age=$_POST['Age'];
$pass=$_POST['spassword'];
$conn=mysqli_connect($servername, $username, $password, $dbname);
$iname=$_FILES["myimage"]["name"];
$image=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));
$sql="INSERT INTO profile VALUES('$name','$email','$age','$pass','$image','$iname','1','0')";
mysqli_query($conn, $sql);
mysqli_close($conn);
header("Location: success.php");
 } } ?>
