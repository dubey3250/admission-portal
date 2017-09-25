<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
//echo "<br/>";
}
?>

<?php
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];
	$about=$_POST['about'];
	mysql_connect('localhost','root','');
	mysql_select_db("project");
$query="insert into info (name,mobile,address,about) values('$name','$mobile','$address','$about')";
mysql_query($query);
header("location:editp.php");	
?>