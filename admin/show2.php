<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
}
?>

<?php
mysql_connect('localhost','root','');
mysql_select_db("project");

$query="select *from contact order by id";

$res=mysql_query($query);
?>

<html>
<head>
</head>
<body bgcolor="lightblue">
<table border="2px" bgcolor="lightgreen">
<tr>
<td style="height:50px; width:225px;">S.no</td>
<td style="height:50px; width:225px;">Name</td>
<td style="height:50px; width:225px;">Mobile</td>
<td style="height:50px; width:225px;">Email</td>
<td style="height:50px; width:225px;">Msg</td>
<td style="height:50px; width:225px;">Address</td>
</tr>

<?php
$i=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>	
 <tr>
		<td style="height:50px; width:225px;"><?php echo $i;?></td>
		
       <td style="height:50px; width:225px;"><?php echo $row['name'];?></td>
	   
	  <td style="height:50px; width:225px;"><?php echo $row['mobile'];?></td>
	   
	   <td style="height:50px; width:225px;"><?php echo $row['email'];?></td>
	   
	  <td style="height:50px; width:225px;"> <?php echo $row['msg'];?></td>
	   
		<td style="height:50px; width:225px;"><?php echo $row['address'];?></td>
  </tr>
<?php
$i++;
}
?>
</body>
</html>