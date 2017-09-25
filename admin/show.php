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
 
$query="select *from site order by id"; 
 $res=mysql_query($query);
 
 ?>
<html>
<head>
</head>
<body>

<table border="1" bgcolor="green" >
<tr>
<th style="height:50px; width:225px;">sr.no</th>
<th style="height:50px; width:225px;">name</th>
<th style="height:50px; width:225px;">mobile</th>
<th style="height:50px; width:225px;">fname</th>
<th style="height:50px; width:225px;">address</th>
<th style="height:50px; width:225px;">dob</th>
<th style="height:50px; width:225px;">email</th>
<th style="height:50px; width:225px;">date</th>
<th style="height:50px; width:225px;">city</th>
<th style="height:50px; width:225px;">gender</th>
<th style="height:50px; width:225px;">uploaded</th>
<th style="height:50px; width:225px;">DELETE</th>
</tr>

<?php
$i=1;
?>

 <?php  	   
	   while($row=mysql_fetch_array($res,MYSQL_BOTH))
	   {   
	?>
	<tr>
		<td style="height:50px; width:225px;"><?php echo $i;?></td>
		
       <td style="height:50px; width:225px;"><?php echo $row['name'];?></td>
	   
	  <td style="height:50px; width:225px;"><?php echo $row['mobile'];?></td>
	   
	   <td style="height:50px; width:225px;"><?php echo $row['fname'];?></td>
	   
	  <td style="height:50px; width:225px;"> <?php echo $row['address'];?></td>
	   
		<td style="height:50px; width:225px;"><?php echo $row['dob'];?></td>
		
		<td style="height:50px; width:225px;"><?php echo $row['email'];?></td>
	     
	   <td style="height:50px; width:225px;"><?php echo $row['date'];?></td>
	   
	   <td style="height:50px; width:225px;"><?php echo $row['city'];?></td>
	  
	   <td style="height:50px; width:225px;"><?php echo $row['gender'];?></td>
	      
	   <td style="height:50px; width:225px;"><img src="../attach/<?php echo $row['file'];?>" height="50px" width="225px"/></td>
	   
	    <td style="height:50px; width:225px;"><a href="delete.php? id=<?php echo $row['id'];?>">delete</a></td>
	   
	  </tr>
	
<?php
   $i++;	   
   }
?>

</body>
</html>