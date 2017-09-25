
<html>
			<head>
					<title>page</title>
					<link href="style3.css" rel="stylesheet" type="text/css"/>
			</head>
					<body>
					  <a href="index.php" style="text-decoration:none; font-size:20px;">click here to Home..</a>
		<?php			
		error_reporting(0);		
         ?>  	
		
				<form action="code2.php" method="POST">		
					<center>
					   <div id="outer">
					   
	<?php
$msg=$_REQUEST['msg'];
error_reporting(0);
if($msg==1)
{  
?>
<p style="color:red; font-size:20px;">invalid username or password</p>
<?php
}
?>					    <span style="font-size:40px; font-family:Rockwell Extra Bold; color:darkblue;">User Pannel</span><br/>
						 <span style="font-size:25px;">Email Id</span><input type="email"  name="email" style="height:40px; outline:none; margin-top:120px; width:200px; border-radius:15px 15px 15px 15px;"/><br/><br/>  
						 <span style="font-size:25px;">password</span><input type="password" name="password" style="height:40px; outline:none; width:200px; border-radius:15px 15px 15px 15px;"/><br/><br/>
						 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="login" style="height:40px; font-size:25px; background-color:blue; width:200px; border-radius:15px 15px 15px 15px;"/>
							
					   </div>
					 </center>  
					 </form>
					</body>
					
</html>					