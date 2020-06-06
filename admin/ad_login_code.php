<?php

session_start();

$email=$_POST['email'];
$pass=$_POST['pass'];

include('connection.php');

$sql="select * from admin_tbl where email='".$email."' and pass='".$pass."'";

$res=mysqli_query($con,$sql);

if($row=mysqli_fetch_array($res))
{
	$_SESSION['name']=$row['name'];
	$_SESSION['email']=$email;
	$_SESSION['pass']=$pass;
	$_SESSION['id']=$row['id'];
	header('location:dashboard.php');
}
else{
	header('location:index.php?alrt=9');
}


?>