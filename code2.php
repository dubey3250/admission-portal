<?php
session_start();
$email=$_POST['email'];
//echo $email;
//echo "<br/>";

$password=$_POST['password'];
//echo $password;
//echo "<br/>";

include("database.php");

$query="select *from site where email='$email' and password='$password'";
$res=mysql_query($query);

if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	
	$_SESSION['email']=$email;
	$_SESSION['password']=$password;
	header("location:profile.php");
}
else
{
	header("location:login.php? msg=1");
}
?>