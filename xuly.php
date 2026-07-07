<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
<?php
$us=$_POST["us"];
$pa=$_POST["pa"];
//echo $us." ".$pa;
$conn=mysqli_connect("localhost","root","","sinhnhatnoitieng");
$sql="SELECT * FROM login";
$result=mysqli_query($conn,$sql);
$a=0;
while($row=mysqli_fetch_array($result))
{
if($us==$row['id']&&($pa==$row['pass']))
{
echo "thanh cong";
$a=1;
}
}
{
if($a==0)
{
header("location:login.html");

}
else
header("location:index.php");

}
?>
</body>
</html>