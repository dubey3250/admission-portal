<?php
session_start();
$user=$_SESSION['email'];
mysql_connect('localhost','root','');
mysql_select_db("project");
$query="select * from site where email='$user'";
$res=mysql_query($query);
$row=mysql_fetch_array($res,MYSQL_BOTH);
$user_id=$row['0'];
//echo $user_id;
$ques_id=$_REQUEST['id'];
//echo $ques_id;
?>
<html>
<head>
<title>Answer</title>
</head>
<body>
<form action="discode2.php" method="post">
<input type="hidden" name="user_id" value="<?php echo $user_id; ?>"/>
<input type="hidden" name="ques_id" value="<?php echo $ques_id; ?>"/>
Post Answer<textarea name="ans" rows="3" cols="35" style="resize:none;"></textarea>
<input type="submit" value="Post"/>
</form>
</body>
</html>