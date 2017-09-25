
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css"/>
<style>
#lst
{
	height:40px;
	width:1350px;
	//border:1px dotted red;
	border-radius:10px 10px 0px 0px;
	margin-top:75px;
	//background-color:lightlue;
}
</style>
<script>
imgno=1;

function movemyslider()
{
	if(imgno==9)
	{
		imgno=1;
	}
document.getElementById("imgslider").src="image/"+imgno+".jpg";
imgno++;
window.setTimeout("movemyslider()",2000);	
}
imgno1=1;

function movemyslider1()
{
	if(imgno1==8)
	{
		imgno1=1;
	}
document.getElementById("imgslider1").src="glry/"+imgno1+".jpg";
imgno1++;
window.setTimeout("movemyslider1()",1000);	
}

function myFunction()
{
document.getElementById("demo").innerHTML = Date();

window.setTimeout("myFunction()");
}

</script>
</head>
<body onload="movemyslider(),movemyslider1(),myFunction()">

<!---<marquee><span style="color:ff66ff; font-size:40px;">Admission Open..</span></marquee>-->
<center>
<div id="head">
	<div id="headl">
	<img src="abcd.jpg"/>
	</div>
  <div id="headr">
  
	<!---<div id="headsub">-->
	
	<span style="font-size:90px; color:330066; font-family:Algerian;"><b>V&nbsp;I&nbsp;T</b><sup style="font-size:50px;">&reg;</sup></span>
	<hr style="height:2px; background-color:330066; margin-left:250px; margin-right:250px;">

	<span style="font-size:50px; color:330066; font-family:Algerian;"><b>UNIVERSITY</b></span>

    
	<!---</div>-->	
  </div>
</div>
<div id="outer">
	<div id="menu">
      	<ul>
					
					<a href="index.php"><li>HOME</li> </a>
					<a href="bout.php"><li>ABOUT US</li> </a>
					<a href="course.php"><li>COURSE</li> </a>
					<a href="registration.php"><li>ADMISSION process</li></a>
					<a href="fclty.html"><li>FACULTY</li></a>
					<a href="#"><li>COMMITTESS</li> </a>
					<a href="vision.php" target="iframe"><li>VISION</li> </a>
					<a href="#"><li>FACILITIES</li> </a>
					<a href="contact.php"><li>CONTACT</li> </a>
					<a href="login.php"><li>LogIn</li> </a>
					
				
				</ul>
	</div>
<img id="imgslider" width="1350px" height="300px"/> 
			<div id="main">
				<div id="center">
					<div id="sub1center">
						<div class="abc">
							<span style="font-size:30px;">Welcome to vellore Institute of Technology</span>
						</div>	
				<!--	  <marquee direction="down" scrollamount="" onmouseover="stop()"  onmouseout="start()"> <span style="font-size:22px;">-->
					  <iframe src="welcom.php" frameborder="0" width="950" height="250" border="0px" name="iframe"></iframe>
					<!--   </marquee>-->
					<!--   <span id="demo" style="color:indigo; font-size:20px; font-family:Kristen ITC;" onmouseover="style.color='red'" onmouseout="style.color='black'"></span>-->
					</div>
					<div id="sub2center">
						<div class="abc">
							<span style="font-size:30px;">Principle's Message</span>
						</div>
						
						<span style="font-size:25px;"><b>I Welcome you VIT Collage,one of leading Collages of University of Vellore imparting quality education in the fields   
							 of science , Arts and Commerce.</b> the college inculcates the deals of Sri Aurobindo and believes that an active commitments towards excellency is fundamental to the process of education. </span>
						
					</div>
					<div id="sub3center">
						<div class="abc">
							<span style="font-size:30px;">What's new!</span><span style="font-size:40px;">NEW!</span>
						</div>
						<span style="font-size:25px;">Inviting quotations for Guest Lecturers in the Department of botany <a href="#"><b style="font-size:30px; color:green;">New!</b></a></span>
						<hr>
						
						<span style="font-size:25px;">Inviting quotations for Student desks <a href="#"><b style="font-size:30px; color:green;">New!</b></a></span>
						<hr>
						
						<span style="font-size:25px;">Teaching Interview for Commerce Department on 13.08.2015 <a href="#"><b style="font-size:30px; color:green;">New!</b></a></span>
						<hr>
						
						<span style="font-size:25px;">Final list of Applications for OBC,SC,ST vacant seats <a href="#"><b style="font-size:30px; color:green;">New!</b></a></span>
						<hr>
						
						<span style="font-size:25px;">Notification for hindi Lecture <a href="#"><b style="font-size:30px; color:green;">New!</b></a></span>
						<hr>
						<span style="font-size:25px;">Teaching Interview Schedule.<a href="#"><b style="font-size:30px; color:green;">New!</b></a></span>
						
					</div>
				</div>
				<div id="rside">
					<div id="sub1rside">
					
					
					<fieldset style="border-left:0px; border-right:0px; border-down:0px;">
								<legend><span style="font-size:30px; color:red;">Quick link</span></legend>
								<a href="www.plus.google.com" ><img src="logo/1.png"/><a/>
								<a href="www.gmail.com"><img src="logo/2.png"/><a/>
								<a href="www.thecrezyprogrammer.com/feed"><img src="logo/3.png"/><a/><br/><br/>
								<a href="www.twiter.com"><img src="logo/4.png"/><a/>
								<a href="www.linkdin.com"><img src="logo/5.png"/><a/><br/><br/>
								<a href="www.digg.com"><img src="logo/6.png"/><a/>
								<a href="www.facebook.com" target="_blank"><img src="logo/7.png"/><a/><br/>
								</fieldset>	
					
					</div>
					<div id="sub2rside">
						
						<a href="gallery.php" style="text-decoration:none;"><span style="font-size:30px; color:red;">>Photo Gallery</span><a/><br/>	
						<!--<img src="pic.jpg">-->
						<img id="imgslider1" width="300px" height="150px"/> 	
						</div>
					<div id="sub3rside">
					
								<fieldset style="border-left:0px; border-right:0px; border-down:0px;">
								<legend><span style="font-size:30px; color:red;">Notifications</span></legend>
								
					<?php
					mysql_connect('localhost','root','');
					mysql_select_db("project");
					$query="select *from news";
					$res=mysql_query($query);
					 while($row=mysql_fetch_array($res,MYSQL_BOTH))
					 {
						 $i=$row['id'];
					 }
					 //$i=$i-1;
					 $query="select *from news where id='$i'";
					$res=mysql_query($query);
					 $row2=mysql_fetch_array($res,MYSQL_BOTH)
					 ?>
					<marquee direction="up" onmouseover="stop();" onmouseout="start();" ><span style="font-size:30; color:green;"><?php echo $row2['news'];?></span><p style="font-size:30; color:green;"><?php echo $row2['date'];?></p> </marquee>  
					
								</fieldset>	
					
					</div>
				</div>
			</div>

</div>
</center>
<div id="lst">
<span style="margin-left:150px; font-size:25px; letter-spacing:4px; color:white;">Copyright&copy;2007-2014 ,Vellore-632014,Tamil Nadu,India. www.vit.ac.in</span>
</div>
</body>
</html>