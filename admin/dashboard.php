<?php

	session_start();
	if($_SESSION['email']=="")
	{
		session_destroy();
		header('location:index.php');
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
	
	.pagecontentdiv img
	{
		height: 200px;
		width: 250px;
	}
	.pagecontentdiv h3
	{
		margin-top: 50px;
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
			<h2>Welcome At Dashboard</h2>
			<hr class="mainunderline"/>
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-12">
								<div class="col-sm-6">
									<div class="col-sm-12">
										<a href="notifications.php">
											<div class="col-sm-12">
													<div class="col-sm-12">
														<h3 style="text-align: center;">All Notifications</h3>
														<img src="images/noti.png">
													</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="col-sm-12">
										<a href="messages.php">
											<div class="col-sm-12">
													<div class="col-sm-12">
														<h3 style="text-align: center;">All Messages</h3>
														<img src="images/message.jpg">
													</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="col-sm-6">
									<div class="col-sm-12">
										<a href="changepassword.php">
											<div class="col-sm-12">
													<div class="col-sm-12">
														<h3 style="text-align: center;">Change Password</h3>
														<img src="images/pass.jpg">
													</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="col-sm-12">
										<a href="logout.php">
											<div class="col-sm-12">
													<div class="col-sm-12">
														<h3 style="text-align: center;">Log Out</h3>
														<img src="images/logout.jpg">
													</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-2"></div>
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