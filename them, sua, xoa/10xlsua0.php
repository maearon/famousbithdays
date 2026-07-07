<?php
$rank = $_POST["rank"];
$name = $_POST["name"];
$img = $_POST["img"];
$age = $_POST["age"];
$career = $_POST["career"];
$link = $_POST["link"];
$coon=mysqli_connect("localhost","root","","sinhnhatnoitieng");
mysqli_query($coon,"SET NAMES utf8");
$sql="update people set rank='$rank',name='$name',img='$img',age='$age',career='$career',link='$link' where rank='$rank'";
$query =mysqli_query($coon,$sql);
if ($query == true) {
echo "thanhcong<br>";
}
else{
echo "that bai";
}
?>