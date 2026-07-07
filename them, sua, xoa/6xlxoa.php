<?php
$id = $_POST["id"];
$coon=mysqli_connect("localhost","root","","sinhnhatnoitieng");
mysqli_query($coon,"SET NAMES utf8");
$sql = "DELETE FROM login WHERE id='$id'";
$query =mysqli_query($coon,$sql);
if ($query == true) {
echo "thanhcong<br>";
}
else{
echo "that bai";
}
?>