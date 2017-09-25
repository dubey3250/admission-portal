<?php
session_start();
if($_SESSION['email']=="")
{
	session_destroy();
	header("location:login.php");
echo "<br/>";
} 
?>
<html>
<head>
<link href="style4.css" rel="stylesheet" type="text/css"/>
</head>

<body style="background:-webkit-linear-gradient(pink 22%,green 78%);">


<span style="font-size:25;font-family:Harlow Solid Italic; color:red;">welcome to profile <?php echo $_SESSION['email'];?>....</span> <br/>

<span style="color:green; font-size:30px;"><a href="profile.php" style="text-decoration:none;"><?php echo $_SESSION['email'];?></a></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<div id="menu">
			            	<ul>
					
					<li><a href="logout.php"><span style="font-size:30px;"> Logout</span></a></li>
					<li><a href="index.php"><span style="font-size:30px;">Home</span></a></li>
					<li><a href="show.php"><span style="font-size:30px;">View profile</span></a></li>
					<li><a href="discussionboard.php"><span style="font-size:30px;">Discussion board</span></a></li>
				
				</ul>
</div>


</body>
</html>
