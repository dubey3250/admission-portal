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
$file=$_FILES['file']['name'];
echo $file;
//echo "<br/>";
$tmp_name=$_FILES['file']['tmp_name'];
echo $tmp_name;
//echo "<br/>";
$location="attach2/";

mysql_connect('localhost','root','');

mysql_select_db("project");
$query="insert into file2 (file) values('$file')";
mysql_query($query);

move_uploaded_file($tmp_name,$location.$file);

header("location:editp.php? m=1");


?>