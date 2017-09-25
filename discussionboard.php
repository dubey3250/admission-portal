<?php
session_start();
if($_SESSION['email']=="")
{
	session_destroy();
	header("location:login.php");
}
?>

<?php
//session_start();
$email=$_SESSION['email'];
mysql_connect('localhost','root','');
mysql_select_db("project");
$query="select * from site where email='$email'";
$res=mysql_query($query);
$row=mysql_fetch_array($res,MYSQL_BOTH);
$id=$row['0'];
//echo $id;
?>
<html>
<head>
<title>Discussion Board</title>
<style>
tr td
{
	height:50px;
	width:250px;
}
</style>
</head>
<body style="background:-webkit-linear-gradient(lightblue 22%,purple 78%);">
<form action="discode.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
Post Question<textarea name="ques" rows="10" cols="60" style="resize:none; font-size:20px;"></textarea>
<input type="submit" value="post" style="background-color:blue; height:25px; width:100px;"/>
</form>


<h1 align="center"> POSTED QUESTION</h1>

<table border="1" align="center">
<tr>
<th>S.NO.</th>
<th>Question</th>
<th>Post Answer</th>
<th>View Answer</th>
</tr>
<?php
$query2="select * from discussion order by user_id";
$res2=mysql_query($query2);
$i=1;
while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
 ?>
<tr>
<td><?php echo $i;?></td>
<td><?php  echo $row2['question'];?></td>
<td><a href="answer.php?id=<?php echo $row2['ques_id'];?>" target="iframe">Post Answer</a></td>
<td><a href="view.php?id=<?php echo $row2['ques_id']; ?>" target="iframe">View Answer</a></td>
</tr>
<?php 
$i++;
}
?>
</table>
<iframe frameborder="0" height="100" width="500" name="iframe"></iframe>
</body>
</html>