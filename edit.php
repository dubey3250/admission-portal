<?php
session_start();
if($_SESSION['email']=="")
{
	session_destroy();
	header("location:login.php");
}
?>

<?php
$id=$_REQUEST['id'];
include("database.php");
$query="select * from site where id='$id'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<html>
<head>
<style>
tr td input
{
	height:40px;
	width:300px;
}
tr th
{
	height:40px;
	width:300px;
} 
</style>
</head>
<body style="background:-webkit-linear-gradient(pink 22%,green 78%);">
<form action="update.php" method="POST">
<table border="1" align="center">
<tr>
<input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
<th>name</th><td><input type="text" name="name" value="<?php echo $row['name'];?>"/></td>
</tr>
<tr>
<th>mobile</th><td><input type="text" name="mobile" value="<?php echo $row['mobile'];?>"/></td>
</tr>
<tr>
<th>fname</th><td><input type="text" name="fname" value="<?php echo $row['fname'];?>"/></td>
</tr>
<tr>
<th>address</th><td><input type="text" name="address" value="<?php echo $row['address'];?>"/></td>
</tr>
<tr>
<th>dob</th><td><input type="date" name="dob" value="<?php echo $row['dob'];?>"/></td>
</tr>
<tr>
<th>Email</th><td><input type="email" name="email" value="<?php echo $row['email'];?>"/></td>
</tr>
<tr>
<th>password</th><td><input type="password" name="password" value="<?php echo $row['password'];?>"/></td>
</tr>
<tr>
<th>gender</th><td><input type="text" name="gender" value="<?php echo $row['gender'];?>"/></td>
</tr>
<tr>
<th>city</th><td><input type="text" name="city" value="<?php echo $row['city'];?>"/></td>
</tr>
<tr>
<th rowspan="2">Course</th><td><input type="text" name="date" value="<?php echo $row['date'];?>"/></td>
</tr>
<tr>
<td ><input type="submit" style="background-color:blue; height:35px; width:200px;" value="update"/></td>
</tr>
<?php
//$d=date('d/m/y');
//$d=time('h/m/s/m');
//echo $d;
}
?>
</table>
</form>
</body>
</html>

