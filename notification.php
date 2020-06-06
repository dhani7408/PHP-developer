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

</head>
<body>


	<?php
		include('mainhead.php');
	?>


<!-- main div content  -->
<div class="row" style="margin-top: 50px;">
	<div class="col-sm-12 pagecontentdiv">
		<div class="col-sm-12">
			<h2>Updates And Notifications</h2>
			<hr class="mainunderline"/>
			<div class="col-sm-12">
				<div class="col-sm-1"></div>				
				<div class="col-sm-10">
								<div class="row wow slideInLeft" data-wow-offset="10" data-wowiteration="10" style="padding-top: 50px;">
				<div class="2"></div>
					<div class="8 wow slideInLeft" data-wow-offset="10" data-wowiteration="10">
						<table border="1px" cellpadding="5px;" style="width: 80%; margin-left: 50%; transform: translate(-50%);">
							<tr>
								<th>Sr. NO.</th>
								<th>Notifications</th>
								<th>Added Date</th>
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
										</tr>
									<?php

									$a++;
								}

							?>

						</table>
					</div>
				<div class="1"></div>
			</div>
				</div>				
				<div class="col-sm-2"></div>				
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