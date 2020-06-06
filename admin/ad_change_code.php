<?php
	
	session_start();

	$id=$_SESSION['id'];

	$old_P=$_POST['old_P'];
	$new_p=$_POST['new_p'];
	$re_p=$_POST['re_p'];

	include('connection.php');

	if($old_P==$_SESSION['pass'])
	{
		if($new_p==$re_p)
		{	
			$sql="update admin_tbl set pass='".$new_p."' where id='".$id."'";
			mysqli_query($con,$sql);
			header('location:index.php?alrttt=6');
		}
		else
		{
			header('location:changepassword.php?alrtt=7');
		}
	}
	else
	{
		header('location:changepassword.php?alrt=8');
	}

?>