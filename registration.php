
<html>
<head>
<title>registration</title>
<style>
table tr td
{
	color:red;
}
</style>
<script>
function myfun()
{
	alert("please calculate your age before fill this form because age should not be more than 20.");
}
</script>
</head>
<body style="background:-webkit-linear-gradient(silver 1%, black 99%);">
<a href="myframe3p.html" target="_blank" style="color:red; font-size:20px;">Click here to calculate your age.</a>
<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg==1)
{
?>	
	<span style="color:red;font-size:30px;margin-left:800px;float:right;">your form has been submitted successfully !</span>;
<?php	
}
?>

<form action="code.php" method="POST" enctype="multipart/form-data">
<table border="1px" style="height:50px; width:250px;" align="center">
<tr>
<td><img src="image2\15.png" style="height:150px; width:150px;"/></td><td style="text-align:center; color:indigo;"><h1>Vellore Institute of Technology</h1>
<span style="font-size:20px;">Vellore-632014,Tamil Nadu,India.</span></td>
</tr>
<tr>
<td style="height:50px; width:200px;">Name*</td><td><input type="text" name="name" required="required" placeholder="Enter your name" style="height:50px; width:300px;"/></td>
</tr>
<tr>
<td style="height:50px; width:200px;">Number*</td><td><input type="text" name="number"  placeholder="Enter your mobile number" style="height:50px; width:300px;"/></td>
</tr>
<tr>
<td style="height:50px; width:200px;">Fname*</td><td><input type="text" name="fname"  placeholder="Enter your father name" style="height:50px; width:300px;"/></td>
</tr>
<tr>
<td style="height:50px; width:200px;">Address*</td><td><textarea rows="5" cols="60" maxlength="100" name="address" style="resize:none;"  ></textarea></td>
</tr>
<tr>
<td style="height:50px; width:200px;">Dob*</td><td><input type="date" name="dob"  placeholder="Enter your date of birth" style="height:50px; width:300px;" onclick="myfun()" /></td>
</tr>
<tr>
<td style="height:50px; width:200px;">Email*</td><td><input type="email" name="email" placeholder="prakash@gmail.com" required="required" style="height:50px; width:300px;"/></td>
</tr>
<tr>
<td style="height:50px; width:200px;">Password*</td><td><input type="password" name="password" style="height:50px; width:300px;"/></td>
</tr>
<tr>
<td style="height:50px; width:200px;">Course*</td>
<td><select name="date" style="height:50px; width:200px;">
	   <option>BBA</option>
		<option>BCA</option>
		<option>MBA</option>
		<option>MCA</option>
		<option>B.com</option>
		<option>M.com</option>
	</select></td>
</tr>
<tr>
<td style="height:50px; width:200px;">Upload Resume*</td><td><input type="file" name="file" style="height:50px; width:300px;"/></td>
</tr>
<tr>
<td style="height:50px; width:200px;">Gender*</td><td><input type="radio" name="gender" value="male"/>male<input type="radio" name="gender" value="female"/>female</td>
</tr>
<tr>
<td>City*</td>
   <td><select name="city" style="height:50px; width:300px;">
	   <option>Allahabad</option>
		<option>Jaunpur</option>
		<option>Lucknow</option>
		<option>Delhi</option>
		<option>Ghazipur</option>
		<option>Chandauli</option>
	</select></td>
</tr>	
<tr>
<td><input type="submit" value="submit" style="height:50px; width:200px; border-radius:10px; background-color:blue;"/></td>
<td><input type="reset" value="clear" style="height:50px; width:200px; border-radius:10px; background-color:blue; "/></td>
</tr>
</table>
</form>

</body>
</html>