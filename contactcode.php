<?php
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$msg=$_POST['msg'];

	#connection
	include('connection.php');

	$sql="insert into msg_tbl (name,email,subject,msg,sent_date) values('".$name."','".$email."','".$subject."','".$msg."',now())";

	mysqli_query($con,$sql);

	header('location:contact.php?alrt=9')

?>