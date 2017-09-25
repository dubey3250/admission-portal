<?php
$name=$_POST['name'];
echo $name;
echo "</br>";

$number=$_POST['number'];
echo $number;
echo "</br>";

$fname=$_POST['fname'];
echo $fname;
echo "</br>";

$address=$_POST['address'];
echo $address;
echo "</br>";

$dob=$_POST['dob'];
echo $dob;
echo "</br>";

$email=$_POST['email'];
echo $email;
echo "</br>";

$password=$_POST['password'];
echo $password;
echo "</br>";

$date=$_POST['date'];
echo $date;
echo "</br>";

$gender=$_POST['gender'];
echo $gender;
echo "</br>";

$city=$_POST['city'];
echo $city;
echo "</br>";

$file=$_FILES['file']['name'];
//echo $file;
//echo "<br/>";
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;
//echo "<br/>";

$type=$_FILES['file']['type'];
//echo $type;
//echo "<br/>";

//$type=$_FILES['file']['type'];
//echo $type;
//echo "<br/>";

$size=$_FILES['file']['size'];
//echo $size;
//echo "<br/>";

$location="attach/";

include("database.php");

$query="insert into site(name,mobile,fname,address,dob,email,password,gender,city,date,file) values('$name','$number','$fname','$address','$dob','$email','$password','$gender','$city','$date','$file')";

mysql_query($query);

move_uploaded_file($tmp_name,$location.$file);
header("location:registration.php? msg=1");
?>