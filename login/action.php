<?php

$host="localhost";
$username="root";
$password="";
$db_name="student";
$db_table="registration";


$conn=mysqli_connect("$host","$username","$password") or die("cannot connect");

mysqli_select_db($conn,"$db_name")or die("connot select db");


$studentName=$_POST['name'];
$studentEmail=$_POST['email'];
$studentPhone=$_POST['phone'];
$studentPassword=$_POST['password'];


$sql="INSERT INTO registration(username,email,phone,password)VALUES('$studentName','$studentEmail','$studentPhone','$studentPassword')";

mysqli_query($conn,$sql);

header("location:registration_success.php");

 ?>