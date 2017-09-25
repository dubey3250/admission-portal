<?php
session_start();
if($_SESSION['email']=="")
{
	session_destroy();
	header("location:login.php");
}
?>

<?php
$id=$_POST['id'];
echo $id;
$ques=$_POST['ques'];
echo $ques;
mysql_connect('localhost','root','');
mysql_select_db("project");
$query="insert into discussion (user_id,question,date) values ('$id','$ques',curdate())";
mysql_query($query);
header("Location:discussionboard.php");
?>