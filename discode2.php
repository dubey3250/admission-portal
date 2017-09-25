<?php
session_start();
if($_SESSION['email']=="")
{
	session_destroy();
	header("location:login.php");
}
?>

<?php
$user_id=$_POST['user_id'];
//echo $user_id;
$ques_id=$_POST['ques_id'];
//echo $ques_id;
$ans=$_POST['ans'];
//echo $ans;
mysql_connect('localhost','root','');
mysql_select_db("project");
$query="insert into answer (user_id,ques_id,answer,date) values ('$user_id','$ques_id','$ans',curdate())";
mysql_query($query);
//header("Location:discussionboard.php");
?>