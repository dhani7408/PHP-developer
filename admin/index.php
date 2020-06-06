
<?php
error_reporting(0);
$alrt=$_REQUEST['alrt'];

if($alrt==9)
{
	echo "<script type='text/javascript'>
		alert('Please Enter a valid email and password....');
		window.location.replace('index.php');
	</script>";
}
	$alrttt=$_REQUEST['alrttt'];
	if($alrttt==6)
	{
		echo "<script type='text/javascript'>
			alert('Password Changed Succesfully....');
			window.location.replace('index.php');
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

<!-- social link top here -->
		<div class="row menu_bar">
			<div class="col-sm-12 social_link">
			<div class="row">
				<div class="col-sm-10" style="color: #fff; text-transform: uppercase;">
					<p style="font-size: 14px; letter-spacing: .5px; position: relative; top: 4px; left: 10px;">Government Handiya Polytechnic</p>
				</div>
				<div class="col-sm-2 wow slideInLeft" data-wow-duration="2s" data-wowdelay="5s"">
					<a href="#" class="hvr-pulse-grow"><i class="fa fa-facebook hvr-pulse-grow"></i></a>
					<a href="#" class="hvr-pulse-grow"><i class="fa fa-twitter"></i></a>
					<a href="#" class="hvr-pulse-grow"><i class="fa fa-google-plus"></i></a>
				</div>
			</div>
			</div>
		</div>
<!-- //social link top here -->

<!--top menu bar starting here -->
	<div class="row top_ber" style="color: #fff; background: url(images/topmenu.jpg); background-repeat: no-repeat; background-size: 100% 330%;">
		 <div style="min-height:114px; width: 100%; background: rgba(220,51,43,.15); padding: 5px 0px;">
		 	<center>
			 	<div class="col-sm-4">
			 		<div style="height: 105px; width: 105px; border-radius: 50%; border: 4px solid #dc332b; padding-top: 4px;">
			 			<img class="wow flipInX" src="images/main_logo.png" height="89px" width="89px" style="border-radius: 50%;">
			 		</div>
			 	</div>
				 <div class="col-sm-4 wow slideInRight" style="padding-top: 30px;">
				 	<div>
				 		<span style="color: #2e2e2e; font-size: 18px; font-weight: 600;"><span class="fa fa-envelope"></span> Mail Us on</span><br/>
				 		<span style="color: #dc332b; font-size: 15px; font-weight: 600; letter-spacing: 1px;">handiapoly@gmail.com</span>
				 	</div>
				 </div>
				 <div class="col-sm-4 wow slideInRight" style="padding-top: 30px;">
				 	<div>
				 		<span style="color: #2e2e2e; font-size: 18px; font-weight: 600;"><span class="fa fa-phone"></span> Call us on</span><br/>
				 		<span style="color: #dc332b; font-size: 15px; font-weight: 600; letter-spacing: 1px;">+91-94 50 603 405</span>
				 	</div>
				 </div>
			 </center>
		 </div>
	</div>
<!-- //top menu bar end here -->

<!-- main menu bar/  nav bar starting here -->

<div class="row main_menu">
	<div class="col-sm-12">
		<div class="row" style="background:  rgba(220,51,43,0);">
			<div class="col-sm-9">
				<div class="menu-icon">
					<span class="fa fa-bars"></span>
				</div>
				<nav>
					<ul>
						<li><a href="index.php">Login here !</a></li>
						<li><a href="../index.php">Back to Home</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-sm-3 serchdiv">
			</div>
		</div>
	</div>
</div>

<!--// main menu bar/  nav bar ending here -->

<!-- main div content  -->
<div class="row" style="margin-top: 50px;">
	<div class="col-sm-12 pagecontentdiv">
		<div class="col-sm-12">
			<h2>Login Please !</h2>
			<hr class="mainunderline"/>
			<div class="row" style="padding: 20px 50px">
				<div class="col-sm-12">
					<div class="col-sm-3"></div>
					<div class="col-sm-6 loginform">
						<form action="ad_login_code.php" method="post" enctype="multipart/form-data">
							<input type="email" name="email" class="txt1" required="required" placeholder=" * Enter Email please...." />
							<input type="password" name="pass" class="txt1" required="required" placeholder=" * *****************" />
							<input type="submit" name="submit" value="Login !" class="subm">
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