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

mysql_connect('localhost','root','');

mysql_select_db("project");
$query="select * from file2";
$res=mysql_query($query);



?>

<html>
<head>
<style>
body
{
	background-color:lightblue;
}
#m
{
	height:400px;
	width:1200px;
	margin:0px auto;
//	border:1px solid;
}
#ml
{
	height:400px;
	width:500px;
//	margin:0px auto;
	//border:1px solid;
	float:left;
//	background-color:pink;
}
#mr
{
	height:400px;
	width:700px;
//	margin:0px auto;
	//border:1px solid;
	float:right;
	//background-color:pink;
}
input
{
	height:40px;
	width:250px;
}
tr td
{
	color:blue;
	font-size:25px;
}
a input
{
	height:30px;
	width:200px;
}
#sub
{
	height:200px;
	width:200px;
	border:1px solid;
	margin:15px;
	float:left;
	
}
a
{
	font-size:20px;
	text-decoration:none;
}
</style>
</head>

<body>
<div id="m">
	<div id="ml">
	<form action="filec.php" method="post" enctype="multipart/form-data">
		<table align="center">
			<tr><td>file</td><td><input type="file" name="file"/></td></tr>
			<tr><td></td><td><input type="submit" value="upload"/></td></tr>
			<tr><td></td><td><a href="profile2.php"><input type="button" value="back"/></a></td></tr>
		</table>	
	</form>
		<?php
			error_reporting(0);
			$m=$_REQUEST['m'];
			if($m==1)
			{
		?>		
				<p style="color:red;font-size:30px;">picture is successfully added.</p>
		<?php		
			}
		?>
	</div>
	<div id="mr">
		<form action="filec2.php" method="post">
			<table align="center">
				<tr><td>Name</td><td><input type="text" name="name"/></td></tr>
				<tr><td>Mobile</td><td><input type="text" name="mobile"/></td></tr>
				<tr><td>Address</td><td><input type="text" name="address"/></td></tr>
				<tr><td>about</td><td><input type="text" name="about"/></td></tr>
				<tr><td></td><td><input type="submit" value="press ok"/></td></tr>
			</table>
		</form>
		
	</div>
</div>
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
	<div id="sub">
		<a href="viewp.php? id=<?php echo $row['id']; ?>"><img src="attach2/<?php echo $row['file']; ?>" height="200" width="200"/>Set as a profile pic</a>
	</div>
<?php
}
?>
</body>
</html>