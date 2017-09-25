<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
}
?>
<?php
$id=$_REQUEST['id'];
//echo $id;

mysql_connect('localhost','root','');
mysql_select_db("project");

$query="select *from site where id='$id'";
$res=mysql_query($query);
$row=mysql_fetch_array($res,MYSQL_BOTH);
$file=$row['file'];
//echo $file;
$location="../attach/";
$res2="delete from site where id='$id'";
mysql_query($res2);
unlink($location.$file);
header("location:show.php");
?>