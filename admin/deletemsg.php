<?php

	$id=$_REQUEST['id'];



	include('connection.php');

	$sql="delete from msg_tbl where id='".$id."'";

	mysqli_query($con,$sql);

	header('location:messages.php?mmm=9');


?>