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
error_reporting(0);
mysql_connect('localhost','root','');
mysql_select_db("project");
if($_REQUEST['id'])
{
 $ids=$_REQUEST['id'];
		$q="select *from file2 where id='$ids'";
		$r=mysql_query($q);
		$r2=mysql_fetch_array($r,MYSQL_BOTH);
		$id=$r2['id'];
		$file=$r2['file'];
		$qw="insert into file (file) values('$file')";
		mysql_query($qw);
		$r3="select * from file";
		$r4=mysql_query($r3);
		while($r5=mysql_fetch_array($r4,MYSQL_BOTH))
		{
			$id2=$r5['id'];
		}
		$r3="select * from file where id='$id2'";
		$r4=mysql_query($r3);
		$r5=mysql_fetch_array($r4,MYSQL_BOTH);
		
}
else
{
	$r3="select * from file";
		$r4=mysql_query($r3);
		$r5=mysql_fetch_array($r4,MYSQL_BOTH);
		while($r5=mysql_fetch_array($r4,MYSQL_BOTH))
		{
			$id2=$r5['id'];
		}
		$r3="select * from file where id='$id2'";
		$r4=mysql_query($r3);
		$r5=mysql_fetch_array($r4,MYSQL_BOTH);
	
}	
$query="select *from info";
$res=mysql_query($query);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$id=$row['id'];
}	
$query2="select *from info where id='$id'";
$res2=mysql_query($query2);
$row3=mysql_fetch_array($res2,MYSQL_BOTH);
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
}
#mr
{
	height:400px;
	width:700px;
//	margin:0px auto;
	//border:1px solid;
	float:right;
}
img
{
	border:1px solid white;
}
a img:hover
{
	border:1px solid blue;
	
}
tr td
{
	color:blue;
	font-size:25px;
}
#sub
{
	height:300px;
	width:300px;
	border:1px solid;
	margin:15px;
	float:left;
	
}
</style>
</head>

<body>
<a href="profile2.php"><input type="button" value="Go back"/></a>
<div id="m">
	<div id="ml">
		<a><img src="attach2/<?php echo $r5['file']; ?>" height="300" width="450"/></a>
	</div>
	<div id="mr">
	<table cellpadding="10" cellspacing="25">
	<tr><td>Name</td><td><?php echo $row3['name'];?></td></tr>
	<tr><td>Mobile</td><td><?php echo $row3['mobile'];?></td></tr>
	<tr><td>Address</td><td><?php echo $row3['address'];?></td></tr>
	<tr><td>About</td><td><?php echo $row3['about'];?></td></tr>
	</table>
	</div>
</div>
<?php
$query="select *from file2";
$res=mysql_query($query);
while($row2=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
	<div id="sub">
		<a><img src="attach2/<?php echo $row2['file']; ?>" height="300" width="300"/></a>
	</div>
<?php
}
?>
</body>
</html>