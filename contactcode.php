<?php
session_start();
if($_SESSION['email']=="")
{
	session_destroy();
	header("location:login.php");
}
?>	

<?php
$name=$_POST['name'];
echo $name;

$mobile=$_POST['mobile'];
echo $name;

$email=$_POST['email'];
echo $email;

$msg=$_POST['msg'];
echo $msg;

$address=$_POST['address'];
echo $msg;

mysql_connect('localhost','root','');
mysql_select_db("project");

$query="insert into contact (name,mobile,email,msg,address) values('$name','$mobile','$email','$msg','$address')";
mysql_query($query);
header("location:contact.php");
?>