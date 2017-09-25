<html>
<head>
<title>page</title>
<link href="style5.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<form action="contactcode.php" method="POST">
<span style="font-size:60px; color:green">Contact us</span>
<div id="outer">
	<div id="left">
<span style="font-size:40px;">name*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" style="height:40px; width:250"/><br/><br/>
	<span style="font-size:40px;">mobile*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mobile" style="height:40px; width:250"/><br/><br/>
	<span style="font-size:40px;">email*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" style="height:40px; width:250"/><br/><br/><br/>
	<span style="font-size:40px;">messsage*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea rows="6" cols="60" maxlength="100" name="msg" required="required" style="resize:none;"></textarea><br/><br/>
	</div>
	<div id="right">
	<span style="font-size:40px;">Address*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea rows="6" cols="60" maxlength="100" name="address" required="required" style="resize:none;" ></textarea><br/><br/>
	 <input type="submit" value="submit" style="font-size:25px; color:green"/>
	</div>
</div>
</form>
</body>
</html>