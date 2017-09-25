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
//echo $id;
mysql_connect('localhost','root','');
mysql_select_db("project");
$query="select * from answer where ques_id='$id'";
$res=mysql_query($query);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
echo $row['answer'];
//$id1=$row['user_id'];
	//$query2="select * from site where id='$id1'";
	//$res2=mysql_query($query2);
	//$row2=mysql_fetch_array($res2,MYSQL_BOTH);
	//echo "<span style='color:red;font-size:30px;margin-left:100px;'>". $row2['name'];
	//echo $row2['email'] ."</span>" ;
echo "<br/><br/>";
}
?>
<html>
<head>
</head>
<body >
</body>
</html>