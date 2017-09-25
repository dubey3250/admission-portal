<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
}
?>
<html>
<head>
</head>
<body style="background:-webkit-linear-gradient(lightgreen 33%,lightblue 67%);">
<form action="newscode.php" method="POST">
News And Events<textarea rows="10" cols="60" maxlength="200" name="news"></textarea>
<input type="submit" value="Add" style="background-color:blue; font-size:25; height:30; width:100px; border-radius:10px;"/>
</form>
</body>
</html>