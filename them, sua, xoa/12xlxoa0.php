<?php
$rank = $_POST["rank"];
$coon=mysqli_connect("localhost","root","","sinhnhatnoitieng");
mysqli_query($coon,"SET NAMES utf8");
$sql = "DELETE FROM people WHERE rank='$rank'";
$query =mysqli_query($coon,$sql);
if ($query == true) {
echo "thanhcong<br>";
}
else{
echo "that bai";
}
?>