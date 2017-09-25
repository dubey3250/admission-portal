<?php
$id=$_POST['id'];
//echo $id;
//echo "<br/>";

$name=$_POST['name'];
//echo $name;
//echo "<br/>";

$mobile=$_POST['mobile'];
//echo $mobile;
//echo "<br/>";

$fname=$_POST['fname'];
//echo $fname;
//echo "<br/>";

$address=$_POST['address'];
//echo $address;
//echo "<br/>";

$dob=$_POST['dob'];
//echo $dob;
//echo "<br/>";

$email=$_POST['email'];
//echo $email;
//echo "<br/>";

$password=$_POST['password'];
//echo $password;
//echo "<br/>";

$gender=$_POST['gender'];
//echo $gender;
//echo "<br/>";

$city=$_POST['city'];
//echo $city;
//echo "<br/>";

$date=$_POST['date'];
//echo $date;
//echo "<br/>";


include("database.php");
$query="update site SET name='$name',mobile='$mobile',fname='$fname',address='$address',dob='$dob',email='$email',gender='$gender',city='$city',date='$date' where id='$id'";
mysql_query($query);
header("location:show.php");



?>