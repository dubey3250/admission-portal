<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
}
?>

<?php
$news=$_POST['news'];
//echo $news;
mysql_connect('localhost','root','');
mysql_select_db("project");

$query="insert into news(news,date) values('$news',curdate())";
mysql_query($query);
header("location:profile2.php");
?>
