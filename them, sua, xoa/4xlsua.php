<?php
$id = $_POST["id"];
$pass = $_POST["pass"];
$coon=mysqli_connect("localhost","root","","sinhnhatnoitieng");
mysqli_query($coon,"SET NAMES utf8");
$sql="update login set id='$id',pass='$pass'";
$query =mysqli_query($coon,$sql);
if ($query == true) {
echo "thanhcong<br>";
}
else{
echo "that bai";
}
?>