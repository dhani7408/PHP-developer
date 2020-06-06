<!DOCTYPE html>
<html>
<head>
	<title>government handiya polytechnic</title>
	<?php
		include('link.php');
		include('script.php');
	?>



</head>
<body>
	<div class="col-sm-12">


	<?php
		include('mainhead.php');
	?>

<div class="row">
	<div class="col-sm-9" style="box-shadow: 0 0 0 1px #dc332b;">
				<!-- slider  -->
	<div class="row">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="images/sl1.jpg" alt="...">
		      <div class="carousel-caption">
		        <h1>HANDIYA POLYTECHNIC COLLEGE</h1>
		      </div>
		    </div>
		    <div class="item">
		      <img src="images/sl2.jpg" alt="...">
		      <div class="carousel-caption">
		        <h1>LIFE AT HANDIYA POLYTECHNIC</h1>
		      </div>
		    </div>
		    <div class="item">
		      <img src="images/sl3.jpg" alt="...">
		      <div class="carousel-caption">
		        <h1>WE NURTURING SKILLS SINCE 1958</h1>
		      </div>
		    </div>
		    <div class="item">
		      <img src="images/sl4.jpg" alt="...">
		      <div class="carousel-caption">
		       	<h1>AN ORGNIZED COURCES STRUCTURE</h1>
		      </div>
		    </div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="color: #dc332b;"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="color: #dc332b;"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
	<!--// slider  -->
	</div>

<!-- 	important notifications are here -->

	<div class="col-sm-3 notification">
		<a href="notification.php">
		<div class="col-sm-12">
			<h3>Updates / Notification <span class="fa fa-bell" style="color: #dc332b;text-shadow: 1px 1px 1px #000;"></span></h3>
			<marquee direction="up" height="300px" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();">
				<ul>
					<?php

					include('connection.php');

					$sql="select * from not_tbl order by id desc";

					$res=mysqli_query($con,$sql);

					while($row=mysqli_fetch_array($res))
					{
						?>
							<li>
								<?php echo $row['msg'] ; ?>
							</li>
						<?php
					}

					?>
				</ul>
			</marquee>
		</div>
		</a>
	</div>

<!-- 	//important notifications are here -->

</div>

<!-- services tags are here -->

	<div class="row servicetag">
		<div class="col-sm-12">
			<h2>Welcome To Handia Polytechnic College</h2>
			<hr class="mainunderline"/>
			<div>
				<p>Oldest Polytechnics College inaugurated by our first Prime Minister Pt. JAWAHARLAL NEHRU & spread over a lush green campus of 42.3 Acres.</p>
			</div>
		</div>
		<div class="col-sm-12" style="padding: 10px 20px">
			<div class="col-sm-4">
				<div class="col-sm-12">
					<div class="col-sm-12 srvcpart wow bounceInLeft" data-wow-offset="10" data-wowiteration="10"">
						<img src="images/srvc1.jpg">
						<h3>Employment / Placement</h3>
						<p>Total Intake 2016-2017: 469 Total Pass out: 397 Employed Campus 10(Eicher Motors) Government 16 Apprentice 35 Off Campus 07(Food Dairy)</p>
						<div align="right">
							<a href="facilities.php">READ MORE</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="col-sm-12">
					<div class="col-sm-12 srvcpart wow bounceIn" data-wow-offset="10" data-wowiteration="10"">
						<img src="images/srvc2.jpg">
						<h3>Transparent Admission</h3>
						<p>Easy On-line Application Fair on-line choice: Easy availability of exam center: Fair/Transparent Admit card: Fair result: Fair counseling: Fair Admission:</p>
						<div align="right">
							<a href="academic.php">READ MORE</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="col-sm-12">
					<div class="col-sm-12 srvcpart wow bounceInRight" data-wow-offset="10" data-wowiteration="10"">
						<img src="images/srvc3.jpg">
						<h3>Education Services</h3>
						<p>The Level of U.P. Diploma Level Technical vis-à-vis the National Level Intake Basis: Institute Base: Per Lakh intake basis: Job Basis: and More things On Oportunity</p>
						<div align="right">
							<a href="academic.php">READ MORE</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- //services tags are here -->


<!-- details about college div  -->

<div class="row">
	<div class="col-sm-12 detailsdiv" style="background: rgba(220,53,41,.05);">
		<div class="col-sm-12">
			<h2>Institute Profile</h2>
			<hr class="mainunderline"/>
			<div class="col-sm-6 wow slideInRight" data-wow-offset="10" data-wowiteration="10">
				<img src="images/dtl_img1.jpg">
			</div>
			<div class="col-sm-6 wow slideInLeft" data-wow-offset="10" data-wowiteration="10">
				<h3>Description of some of the important work undertaken within the past one year.</h3>
				<p>The Main gate has been redone substantially.</p>
				<p>The area in front of the office has been cleaned up of shrub and unnecessary foliage.</p>
				<p>The dysfunctional sawmill of workshop has been restored. Four dysfunctional Lathe machines have
					also been overhauled and are used now.</p>
				<p>All street lamps have been made functional and have been fitted with LED.</p>
				<p>Ramps have been constructed on the academic buildings.
					The building housing the office , Library and the main auditorium has been painted.</p>
				<p>
					<a href="about.php"><span class="fa fa-eye"></span> READ MORE</a>
				</p>
			</div>
		</div>
	</div>
</div>

<!-- //details about college div  -->

<!-- principle details -->

<div class="row">
	<div class="col-sm-12 principlediv">
		<div class="col-sm-12">
			<h2>Our Principle</h2>
			<hr class="mainunderline"/>
			<div class="col-sm-8">
				<h3>Few Words From Principal</h3>
				<p>HANDIA POLYTECHNIC,HANDIA ALLAHABAD is an AICTE approved college for polytechnic. We are a government aided institution affiliated to BOARD OF TECHNICAL EDUCATION ,LUCKNOW.</p>
				<p>The institution is situated at NH-2 in Handia,Allahabad, Utter Pradesh. The institution was is established in the year 1958 with the intention of providing a target to spread engineering diploma level education to the students.</p>
				
				<p>It was inaugurated by our first Prime Minister Pt. JAWAHARLAL NEHRU.It is one the oldest polytechnics and is spread over a lush green campus of 42.3 Acres. of India and also a one thing told about it.</p>
				<p>
					<a href="principlesir.php"><span class="fa fa-eye"></span> READ MORE</a>
				</p>
			</div>
			<div class="col-sm-4 wow slideInLeft" data-wow-offset="10" data-wowiteration="10" style="padding-top: 50px;">
				<img src="images/principle.jpg" style="border: 5px solid Transparent; box-shadow: 0 0 0 3px #dc332b;">
				<p style="font-weight: bold; font-size: 20px; margin-top: 10px; text-shadow: none; color: #dc332b;">
					Mr. Brijesh Singh (Principle)
				</p>
			</div>
		</div>
	</div>
</div>
</div>
<!-- //principle details -->


<!-- calender div download calender of college -->

<div class="row">
	<div class="col-sm-12 calenderdiv">
		<h2>Our Academic Calender</h2>
		<hr class="mainunderline"/>
		<div class="calendermain" style="background-image: url('images/calender.jpg');">
			<div class="calenderinner">
				<div class="calenderbtn">
					<h2 style="text-shadow: 0 0 1px #000; font-weight: 800; font-size: 30px;">
						Download Our Academic Calender
					</h2>
					<center>
						<a href="#">
							<span class="fa fa-download"></span> DOWNLOAD
						</a>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- //calender div download calender of college -->




<!-- footer starting here -->
	<?php
		include('footer.php');
	?>
<!-- //bottom footer -->

<!-- search button link here -->
	<!-- <div class="outer_search">
		<div class="searchbtn">
			<span class="fa fa-search"></span>
		</div>
		<div class="searchbox">
			<form action="#" method="post">
				<input type="text" required="required" placeholder="Search here..." name="search_item"/>
				<label><input type="submit" name="sub" value="submit" style="display: none;"><span class="fa fa-search"></span></label>
			</form>
		</div>
	</div> -->
<!-- //search button link here -->
	</div>
</body>
</html>