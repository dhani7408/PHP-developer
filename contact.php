<?php
	error_reporting(0);
	$mm=$_REQUEST['alrt'];

	if($mm==9)
	{
		echo "<script>
			alert('Your Message has been send, Succesfully !');
			window.location.replace('contact.php');
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
		.form-control
		{
			height: 40px;
			margin-bottom: 30px;
			outline: 1px solid #dc332b;
			border-radius: 5px;
			color: #dc332b;
			font-weight: 600;
			font-size: 15px;
		}
		input[name='submt']
		{
			background: #dc332b;
			border: none;
			box-shadow: none;
			color: #fff;
			font-weight: 600;
			font-size: 17px;
			height: 50px;
			width: 250px;
			margin-bottom: 30px;
			border-radius: 10px;
			border: 2px solid #fff;
			transition: .5s;
		}
		input[name='submt']:hover
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
			<h2>Conatact Us</h2>
			<hr class="mainunderline"/>
			<div class="row" style="background: rgba(220,43,51,.02); padding-top: 20px;">
				<div class="col-sm-12">
					<form action="contactcode.php" method="post" enctype="multipart/form-data">
						<div class="col-sm-12">
							<div class="col-sm-6" style="padding: 0px 10px 0px 150px;">
								<input type="text" required="required" placeholder="* Enter Your Name..." name="name" id="name_n" class="form-control" />
								<input type="email" required="required" name="email" placeholder="* Enter Your Email..." id="name_e" class="form-control" />
								<input type="text" required="required" name="subject" placeholder="* Subject..." id="name_s" class="form-control" />
							</div>
							<div class="col-sm-6" style="padding: 0 150px 0 10px;">
								<textarea name="msg" placeholder="* Your Message..." required="required" class="form-control" style="height: 180px;"></textarea>
							</div>
							<center><input type="submit" name="submt" value="Send Message !"></center>
						</div>
					</form>
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