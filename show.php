<?php
mysql_connect('localhost','root','');
mysql_select_db("hackathon");
$query="select max(id) as p from regist";
$res=mysql_query($query);
$cid=mysql_fetch_array($res,MYSQL_BOTH);
$id=$row['p'];
$query1="select *from doner where id='$id'";
$res1=mysql_query($query1);
$empid=rand(1,3);
$query3="select *from employee where id='$empid'";
$res3=mysql_query($query3);
$row3=mysql_fetch_array($res3,MYSQL_BOTH);

?>


<html>
<head>
<style>
tr
{
	height:70px;
	//width:250px;
	text-align:center;
}
td
{
	height:30px;
	width:250px;
	font-size:25px;
}
</style>
<script>
function printn()
{
	window.print();
}
</script>
</head>
<body style="background-color:silver;">

<table border="1" bgcolor="white" >
 <?php  
   if($row=mysql_fetch_array($res1,MYSQL_BOTH))
   {
	?>	
	<tr>
      <th>doner_id</th><td><?php echo $row['d_id'];?></td>
	 </tr>   
	 <tr>
	  <th>name</th><td ><?php echo $row['name'];?></td>
	 </tr>  
	 <tr>  
	   <th>disease</th><td><?php echo $row['disease'];?></td>
	 </tr> 
	 <tr>
	  <th>date of donation</th><td ><?php echo $row['date_of_donation'];?></td>
	 </tr>  
	 <tr>
		<th>age</th><td><?php echo $row['age'];?></td>
	 </tr>	
	 <tr>
		<th>quantity</th><td><?php echo $row['quantity'];?></td>
	 </tr>  
	 <tr>
	   <th>sex</th><td ><?php echo $row['sex'];?></td>
	 </tr> 
	 <tr>
	   <th>address</th><td><?php echo $row['address'];?></td>
	 </tr> 
	  <tr>
	   <th>type of doner</th><td><?php echo $row['type_of_doner'];?></td>
	 </tr> 
	 <tr>
	   <th>BB emp_id</th><td><?php echo $row3['id'];?></td>
	 </tr>
	 <tr>
	   <th>BB emp_name</th><td><?php echo $row3['emp_name'];?></td>
	 </tr>
	 <tr>
	   <th></th><td ><input type="button" onclick="printn();" value="print"></td>
	 </tr> 
<?php	   
   }
?>

</body>
</html>
