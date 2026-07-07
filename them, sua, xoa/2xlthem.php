<?php
$id = $_POST["id"];
$pass = $_POST["pass"];
$coon=mysqli_connect("localhost","root","","sinhnhatnoitieng");
mysqli_query($coon,"SET NAMES utf8");
$sql = "insert into login (id,pass) values ('$id','$pass')";
$query =mysqli_query($coon,$sql);
if ($query == true) {
echo "thanhcong<br>";
}
else{
echo "that bai";
}
?>