<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
//echo "<br/>";
}
?>

<html>
<head>
<link href="style6.css" rel="stylesheet" type="text/css"/>
</head>
<body bgcolor="lightblue">
<span style="font-size:80px; font-family:Script MT Bold;"><?php echo $_SESSION['admin'];?></span><br/><br/>
<!--<span style="font-size:30px; font-family:Script MT Bold;">to see all the registration data</span>
<a href="show.php"><span style="font-size:35px; font-family:Script MT Bold;">Click here.</span></a>-->

<center><br/><br/>
			<div id="menu2">
			      	<ul>
					
					
					<li><span style="font-size:20px;">Students</span></li>
					<li><span style="font-size:20px;">Response Mgmt</span></li>
					<li><span style="font-size:20px;">Settings</span></li>
				
				</ul>
			</div>
			
				<div id="menu">
			      	<ul>
					
					
					<li><a href="show.php"><span style="font-size:20px; color:blue;">Registration detail</span></a></li>
					<li><a href="show2.php"><span style="font-size:20px; color:blue;">Contact us Mgmt</span></a></li>
					<li><a href="viewp.php"><span style="font-size:20px; color:blue;">View profile</span></a></li>
				
				</ul>
			</div>
			
				<div id="menu">
			      	<ul>
					
					
					<li><span style="font-size:20px; color:blue;">Student profile</span></li>
					<li><a href="pic.php"><span style="font-size:20px; color:blue;">gallery Mgmt</span></a></li>
					<li><a href="editp.php"><span style="font-size:20px; color:blue;">Edit Profile</span></a></li>
				
				</ul>
			</div>
			
					<div id="menu">
			      	<ul>
					
					
					<li><a href="news.php"><span style="font-size:20px; color:blue;">News& event</span></a></li>
					<li><span style="font-size:20px; color:blue;">Send Email& sms</span></li>
					<li><a href="password2.php"><span style="font-size:20px; color:blue;">Change Password</span></li>
				
				</ul>
			</div>
			
			<div id="menu">
			      	<ul>
					
					
					<li><a href="#"><span style="font-size:20px; color:blue;">Notification</a></span></li>
					<li><span style="font-size:20px; color:blue;">Enquiry Mgmt</span></li>
					<li><a href="logout.php"><span style="font-size:20px; color:blue;">logout</span></a></li>
				
				</ul>
			</div>
				
		</center>

</body>
</html>
