<!DOCTYPE html>
<head>
<style>
a:hover
{
	border:1px solid blue;
}
img
{
width:330px;	
}
</style>
<title>gallery</title>
</head>
<body style="background-color:blue;">
<!--<audio>
<a href="http://localhost:70/website/image2/Chintatatachita.mp3"><source src="image2/Chintatatachita.mp3" height="300" width=""/></a>
</audio>-->
<a href="http://localhost:70/website/image2/1.png"><img src="image2/1.png" height="250" width=""/></a>	
<a href="http://localhost:70/website/image2/2.jpg"><img src="image2/2.jpg" height="250" width=""/></a>	
<a href="http://localhost:70/website/image2/3.jpg"><img src="image2/3.jpg" height="250" width=""/></a>	
<a href="http://localhost:70/website/image2/4.jpg"><img src="image2/4.jpg" height="250" width=""/></a>	
<a href="http://localhost:70/website/image2/5.jpg"><img src="image2/5.jpg" height="250" width=""/></a>	
<a href="http://localhost:70/website/image2/6.jpg"><img src="image2/6.jpg" height="250" width=""/></a>	
<a href="http://localhost:70/website/image2/7.jpg"><img src="image2/7.jpg" height="250" width=""/></a>	
<a href="http://localhost:70/website/image2/8.jpg"><img src="image2/8.jpg" height="250" width=""/></a>	
<a href="http://localhost:70/website/image2/9.jpg"><img src="image2/9.jpg" height="250" width=""/></a>	
<a href="http://localhost:70/website/image2/10.jpg"><img src="image2/10.jpg" height="250" width=""/></a>	
<a href="http://localhost:70/website/image2/11.jpg"><img src="image2/11.jpg" height="250" width=""/></a>	
<a href="http://localhost:70/website/image2/12.jpg"><img src="image2/12.jpg" height="250" width=""/></a>	
<a href="http://localhost:70/website/image2/13.jpg"><img src="image2/13.jpg" height="250" width=""/></a>	
<a href="http://localhost:70/website/image2/14.jpg"><img src="image2/14.jpg" height="250" width=""/></a>	
<a href="http://localhost:70/website/image2/15.png"><img src="image2/15.png" height="250" width=""/></a>	
<a href="http://localhost:70/website/image2/16.jpg"><img src="image2/16.jpg" height="250" width=""/></a>
<a href="http://localhost:70/website/image2/17.jpg"><img src="image2/17.jpg" height="250" width=""/></a>
<a href="http://localhost:70/website/image2/18.jpg"><img src="image2/18.jpg" height="250" width=""/></a>
<a href="http://localhost:70/website/image2/19.jpg"><img src="image2/19.jpg" height="250" width=""/></a>
<a href="http://localhost:70/website/image2/20.jpg"><img src="image2/20.jpg" height="250" width=""/></a>
<a href="http://localhost:70/website/image2/21.png"><img src="image2/21.png" height="250" width=""/></a>	
<a href="http://localhost:70/website/image2/22.jpg"><img src="image2/22.jpg" height="250" width=""/></a>
<a href="http://localhost:70/website/image2/23.jpg"><img src="image2/23.jpg" height="250" width=""/></a>
<a href="http://localhost:70/website/image2/24.jpg"><img src="image2/24.jpg" height="250" width=""/></a>
<a href="http://localhost:70/website/image2/25.jpg"><img src="image2/25.jpg" height="250" width=""/></a>
<a href="http://localhost:70/website/image2/26.jpg"><img src="image2/26.jpg" height="250" width=""/></a>
<a href="http://localhost:70/website/image2/27.jpg"><img src="image2/27.jpg" height="250" width=""/></a>
<a href="http://localhost:70/website/image2/28.jpg"><img src="image2/28.jpg" height="250" width=""/></a>
</body>
</html>
<?php
mysql_connect('localhost','root','');
mysql_select_db("project");
$query="select * from glry";
$res=mysql_query($query);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<a href="http://localhost:70/website/admin/file/<?php echo $row['file'];?>"><img src="admin/file/<?php echo $row['file']; ?>" height="250" width=""/></a>
<?php
}
?>