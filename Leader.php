<?php
header("Content-type:image/jpeg");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "details";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql="select * from profile where score=(select max(score) from profile)";
$result=mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$image=$row['image'];
echo $row['image'];
echo "<img src='.$image.' alt='background.jpg' style='width:128px;height:128px'>";
?>