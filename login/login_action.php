<?php

$host="localhost";
$username="root";
$password="";
$db_name="student";
$db_table="registration";


$conn=mysqli_connect("$host","$username","$password") or die("cannot connect");

mysqli_select_db($conn,"$db_name")or die("connot select db");



$studentEmail=$_POST['email'];
$studentPassword=$_POST['password'];
//echo "$studentPassword";


$sql="SELECT * FROM registration WHERE email='$studentEmail' and password='$studentPassword'";

$result=mysqli_query($conn,$sql);

$count=mysqli_num_rows($result);

echo $count;

if($count==1){
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);


	$studentName=$row["username"];
	//$studentEmail=$row["email"];
	//$studentPassword=$row["password"];
	session_start();
	
	$_SESSION['email'] = $studentEmail;
	$_SESSION['name'] = $studentName;
	$_SESSION['password']= $studentPassword;	
 	

	header("location:main.php");
}else{
	echo "wrong";
}

 ?>