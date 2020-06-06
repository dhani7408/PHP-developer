<?php
	
	error_reporting(0);
	session_start();
	if($_SESSION['email']=="")
	{
		session_destroy();
		header('location:index.php');
	}

	$alrt=$_REQUEST['alrt'];
	if($alrt==8)
	{
		echo "<script type='text/javascript'>
			alert('Old password not matched....');
			window.location.replace('changepassword.php');
		</script>";
	}

	$alrtt=$_REQUEST['alrtt'];
	
	if($alrtt==7)
	{
		echo "<script type='text/javascript'>
			alert('Re-Enter password not matched....');
			window.location.replace('changepassword.php');
		</script>";
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>contact government handiya polytechnic</title>
	<?php
		include('link.php');
		include('script.php');
	?>

<style type="text/css">
	.loginform input
	{
		margin-bottom: 20px;
		width: 100%;
		height: 45px;
		padding: 10px;
		border-radius: 10px;
		color: #dc332b;
		font-weight: 600;
		letter-spacing: .5px;
		font-size: 15px;
	}
	.loginform .txt1
	{
		background: transparent;
		outline: none;
		border: none;
		border:1px solid #dc332b;
	}
	.loginform .subm
	{
		border:none;
		color: #fff;
		font-weight: 600;
		font-size: 20px;
		background: #dc332b;
		transition: all ease .5s;
	}
	.loginform .subm:hover
	{
		background: #5f84f2;
	}
</style>


</head>
<body>


	<?php
		include('mainhead.php');
	?>


<!-- main div content  -->
<div class="row" style="margin-top: 50px;">
	<div class="col-sm-12 pagecontentdiv">
		<div class="col-sm-12">
			<h2>Change Password</h2>
			<hr class="mainunderline"/>
			<div class="col-sm-12">
				<div class="col-sm-12">
					<div class="col-sm-3"></div>
					<div class="col-sm-6 loginform">
						<form action="ad_change_code.php" method="post" enctype="multipart/form-data">
							<input type="password" name="old_P" class="txt1" required="required" placeholder=" * Enter OLD Password" />
							<input type="password" name="new_p" class="txt1" required="required" placeholder=" * New password...." />
							<input type="password" name="re_p" class="txt1" required="required" placeholder=" * Re Enter password" />
							<input type="submit" name="submit" value="Change password !" class="subm">
						</form>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!--// main div content  -->



<!-- contact div is here -->

<!-- //contact div is here -->


<!-- footer starting here -->
	<?php
		include('footer.php');
	?>
<!-- //bottom footer -->



</body>
</html>