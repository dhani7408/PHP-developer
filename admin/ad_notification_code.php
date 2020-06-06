<?php

	$not=$_POST['notfic'];

	include('connection.php');

	$sql="insert into not_tbl (msg,ad_date) values ('".$not."',now())";

	mysqli_query($con,$sql);

	header('location:notifications.php?mmg=5');

?>