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
				alert('Message Deleted.....');
				window.location.replace('Messages.php');
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
	</style>


	<script type="text/javascript">
		function dlt()
		{
			var a=confirm('Are You Sure To Delete This Messages....');
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
			<h2>All Messages</h2>
			<hr class="mainunderline"/>
			<div class="col-sm-12">
				<div class="row">
					<div class="2"></div>
					<div class="8 wow slideInLeft" data-wow-offset="10" data-wowiteration="10">
						<table border="1px" cellpadding="5px;" style="width: 80%; margin-left: 50%; transform: translate(-50%);">
							<tr>
								<th>Sr. NO.</th>
								<th>Name</th>
								<th>Email</th>
								<th>Subject</th>
								<th>Message</th>
								<th>Date</th>
								<th>Delete</th>
							</tr>
							
							<?php
								include('connection.php');

								$sql="select * from msg_tbl order by id desc";

								$res=mysqli_query($con,$sql);
								$a=1;
								while($row=mysqli_fetch_array($res))
								{
									?>
										<tr>
											<td><?php echo "$a"; ?></td>
											<td><?php echo $row['name']; ?></td>
											<td><?php echo $row['email']; ?></td>
											<td><?php echo $row['subject']; ?></td>
											<td><?php echo $row['msg']; ?></td>
											<td><?php echo $row['sent_date']; ?></td>
											<td><a onclick="return dlt()" href="deletemsg.php?id=<?php echo $row['id']; ?>">DELETE</a></td>
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