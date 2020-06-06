<?php

	$id=$_REQUEST['id'];



	include('connection.php');

	$sql="delete from not_tbl where id='".$id."'";

	mysqli_query($con,$sql);

	header('location:notifications.php?mmm=9');


?>