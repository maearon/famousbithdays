<?php
$conn=mysqli_connect("localhost","root","","sinhnhatnoitieng");
mysqli_query($conn, "SET NAMES utf8");
$sql="SELECT * FROM login";
$sql1="SELECT * FROM people";
$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);
?>
<!doctype html>
<html>
<head>
<meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″/>
<title>Thêm, Sửa, Xóa CSDL | Sinh Nhật Nổi Tiếng </title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<h1 style="text-align: center">Bảng Đăng Nhập</h1>	
	<table width="902" border="1" cellpadding="20" cellspacing="0" style="height:200%; width:100%; text-align: center">
			<tr>
				<td width="126">id</td>
				<td width="325">pass</td>
			</tr>
  			<?php
  			while($row=mysqli_fetch_array($result))
  			{
  			?>
  			<tr>
    			<td><?php echo $row['id']; ?></td>
    			<td><?php echo $row['pass']; ?></td>
  			</tr>
  			<?php
  			}
  			?>
	</table>
	<a href="1them.php" target="new">Thêm </a>|
    <a href="3sua.php" target="new">Sửa </a>| 	
	<a href="5xoa.php" target="new">Xóa </a><br><br><br>
	<h1 style="text-align: center">Bảng Mọi Người</h1>
	<table width="902" border="1" cellpadding="20" cellspacing="0" style="height:200%; width:100%; text-align: center">
			<tr>
				<td width="126">rank</td>
				<td width="325">name</td>
				<td width="330">img</td>
				<td width="330">age</td>
				<td width="330">career</td>
				<td width="330">link</td>
			</tr>
  			<?php
  			while($row=mysqli_fetch_array($result1))
  			{
  			?>
  			<tr>
    			<td><?php echo $row['rank']; ?></td>
    			<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['img']; ?></td>
				<td><?php echo $row['age']; ?></td>
				<td><?php echo $row['career']; ?></td>
				<td><?php echo $row['link']; ?></td>
  			</tr>
  			<?php
  			}
  			?>
	</table>
	<a href="7them0.php" target="new">Thêm </a>|
    <a href="9sua0.php" target="new">Sửa </a>| 	
	<a href="11xoa0.php" target="new">Xóa </a>
</body>
</html>