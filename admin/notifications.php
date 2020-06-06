<?php

	error_reporting(0);
	session_start();
	if($_SESSION['email']=="")
	{
		session_destroy();
		header('location:index.php');
	}


		$mm=$_REQUEST['mmm'];
		if($mm==9)
		{
			echo "<script type='text/javascript'>
				alert('Notification Deleted.....');
				window.location.replace('notifications.php');
			</script>";
		}
		
		$mmg=$_REQUEST['mmg'];
		if($mmg==5)
		{
			echo "<script type='text/javascript'>
				alert('Notification Added....');
				window.location.replace('notifications.php');
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
		table
		{
			border: 1px solid #dc332b;
		}
		table tr th
		{
			color: #dc332b;
			text-align: center;
			padding: 10px;
		}
		table tr td
		{
			padding: 8px;
			font-size: 15px;
		}
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

	<script type="text/javascript">
		function dlt()
		{
			var a=confirm('Are You Sure To Delete This Notification....');
			if(a==true)
			{
				return true;
			}
			else if(a==false)
			{
				return false;
			}
		}
	</script>


</head>
<body>


	<?php
		include('mainhead.php');
	?>


<!-- main div content  -->
<div class="row" style="margin-top: 50px;">
	<div class="col-sm-12 pagecontentdiv">
		<div class="col-sm-12">
			<h2>Manage Notification / Updates</h2>
			<hr class="mainunderline"/>
			<div class="row">
				<div class="col-sm-12">
					<div class="col-sm-3"></div>
					<div class="col-sm-6 loginform">
						<form action="ad_notification_code.php" method="post" enctype="multipart/form-data">
							<input type="text" name="notfic" class="txt1" required="required" placeholder="Add notification from here..."/>
							<input type="submit" name="submit" value="Add Notification !" class="subm">
						</form>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</div>
			<div class="row wow slideInLeft" data-wow-offset="10" data-wowiteration="10" style="padding-top: 50px;">
				<div class="2"></div>
					<div class="8 wow slideInLeft" data-wow-offset="10" data-wowiteration="10">
						<table border="1px" cellpadding="5px;" style="width: 80%; margin-left: 50%; transform: translate(-50%);">
							<tr>
								<th>Sr. NO.</th>
								<th>Notifications</th>
								<th>Added Date</th>
								<th>Delete</th>
							</tr>
							
							<?php
								include('connection.php');

								$sql="select * from not_tbl order by id desc";

								$res=mysqli_query($con,$sql);
								$a=1;
								while($row=mysqli_fetch_array($res))
								{
									?>
										<tr>
											<td><?php echo "$a"; ?></td>
											<td><?php echo $row['msg']; ?></td>
											<td><?php echo $row['ad_date']; ?></td>
											<td><a onclick="return dlt()" href="deletenot.php?id=<?php echo $row['id']; ?>">DELETE</a></td>
										</tr>
									<?php

									$a++;
								}

							?>

						</table>
					</div>
					<div class="2"></div>
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