


		
		<?php
			session_start();
		// check is if a user is signed in or not to display the approapriate header

			 //include_once ('header1.php');

			if (!isset($_SESSION['userid'])) {	
		
	
			 	include_once ('header1.php');
			 }else{
				if ($_SESSION['usertype'] == '1') {
						include_once('header2.php');
					 }else{

					 	include_once('buyer_header.php');
					 }
			 }


			 $gigobj = new Gigs;

			$market = $gigobj->getCategories();

			$gig = $gigobj->getAllGigs();

			// echo "<pre>";
			// print_r($gig);
			// echo "</pre>";
			// exit;


		?>


		<!-- Carousel section -->
		

		<div class="row">
			
				<!-- <div class="col-md" style="margin: 0;"> -->
				<div class="bd-example">
				  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				    <ol class="carousel-indicators">
				      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				    </ol>
				    <div class="carousel-inner">
				      <div class="carousel-item active">
				        <img src="images/computer-1245714_1920.jpg" class="d-block w-100" alt="...">
				        <div class="carousel-caption d-none d-md-block">
				          <h1 style="z-index: 1; color: white; position: relative;" class="animated bounce">First slide label</h1>
				          <p class="animated bounceInLeft">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
				        </div>
				      </div>
				      <div class="carousel-item">
				        <img src="images/coding-699318_1920.jpg" class="d-block w-100" alt="...">
				        <div class="carousel-caption d-none d-md-block">
				          <h1 style="z-index: 1;" class="animated bounce">Second slide label</h1>
				          <p class="animated bounceInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				        </div>
				      </div>
				      <div class="carousel-item">
				        <img src="images/laptop-3190194_1920.jpg" class="d-block w-100" alt="...">
				        <div class="carousel-caption d-none d-md-block">
				          <h1 style="z-index: 1;" class="animated bounce">Third slide label</h1>
				          <p class="animated bounceInLeft">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
				        </div>
				      </div>
				    </div>
				    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				      <span class="carousel-control-next-icon" aria-hidden="true"></span>
				      <span class="sr-only">Next</span>
				    </a>
				  </div>
				</div>

			<!-- </div> -->
		</div>


		<!-- postioned search bar -->

		

			<!-- div for how it works -->
		<div class="row" style="margin-top: 20px; box-shadow: 1px 1px 5px grey;">
			<div class="col-md">
				<div class="row justify-content-around">

					<div class="col-md d-flex purplebg" style="justify-content: space-around;">

						<h1>How it works</h1>
			
					</div>
					
				</div>

				<div class="row">

					<div class="col-md ">
						<div class="row">
							<div class="col-md d-flex justifyForMe ">
								<div class="circlehold"><i class="fas fa-search-plus fastyle"></i></div>
							</div>
						</div>

						<div class="row">
							<div class="col-md my-textAlign">
								<h5>Select the service you need</h5>
								<p>Pick from an array of the services you can find on our site that best suits your need</p>
							</div>
						</div>


					</div>

					<div class="col-md">
						<div class="row">
							<div class="col-md d-flex justifyForMe">
								<div class="circlehold"><i class="fas fa-users fastyle"></i></div>
							</div>
						</div>

						<div class="row ">
							<div class="col-md my-textAlign">
								<h5>Find the Best Unilancer</h5>
								<p>You can only find the best here. This means you are in a pool of high quality. Just take a deep breath and choose.</p>
							</div>
						</div>


					</div>

					<div class="col-md">
						<div class="row">
							<div class="col-md d-flex justifyForMe">
								<div class="circlehold"><i class="fas fa-laptop fastyle"></i></div>
							</div>
						</div>

						<div class="row">
							<div class="col-md my-textAlign">
								<h5>Collaborate Easily</h5>
								<p>Bring on any IT related project you have got and enjoy a professional relationship with our sellers.</p>
							</div>
						</div>


					</div>

					<div class="col-md">
						<div class="row">
							<div class="col-md d-flex justifyForMe">
								<div class="circlehold">
									<i class="fas fa-money-check-alt fastyle"></i>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md my-textAlign">
								<h5>Secured Payment</h5>
								<p>Our platform has a secured payment intergration that's got your back. You need not worry about your wallet's safety.</p>
							</div>
						</div>


					</div>
					
				</div>
			</div>

		</div>

		<!-- Div for get work done faster -->

		<div class="row" style="padding: 10px;">
			<div class="col-md">
				<div class="row">
					<div class="col-md d-flex justifyForMe purplebg" style="margin-bottom: 10px;">
						<h3>Get Work Done Faster On Unilancer, With Confidence</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-md">
						<h5><i class="far fa-check-circle purpletext"></i> Payment Protection, Guaranteed</h5>
						<p>Payment is released to the freelancer once you’re pleased and approve the work you get.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md">
						<h5><i class="far fa-check-circle purpletext"></i> Know The Price Upfront</h5>
						<p>Find any service within minutes and know exactly what you’ll pay. No hourly rates, just a fixed price.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md">
						<h5> <i class="far fa-check-circle purpletext"></i> We’re Here For You 24/7</h5>
						<p>
							Unilancer is here for you, anything from answering any questions to resolving any issues, at any time.
						</p>
					</div>
				</div>

			</div>

			<div class="col-md" style="margin-left: 2px; background-image: url('images/business.jpg'); background-size: cover;">
				<!-- <img class="img-responsive" src="images/business.jpg"> -->
			</div>
		</div>


		<!-- Latest seller section -->

		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div style="padding: 5px;" class="col-md d-flex justifyForMe marginTop purplebg marginbott">
						<h3>Professional Students Ready to be Hired</h3>
					</div>
				</div>

				<div class="row">

					<?php 

						foreach ($gig as $key => $value) {
							$gigimage = $value['gig_headerpic'];
							$gigtitle = $value['gig_title'];
							$gig_basicprice = $value['basic_price'];
							$username = $value['user_username'];
							$serviceid = $value['gig_serviceid'];
						
					?>

						<div class="col-md-3 d-flex justifyForMe">
						
						<div class="gigBox">
							<div style="width:230px; height:150px; background-color: black;">
							<img class="img-fluid" style="height: 150px; width: 230px; " src="<?php if (isset($gigimage)) {
								 echo $gigimage;
							} ?>">
							</div>
						<p style="padding:5px; height: 20px;">	<a href="userpublicmode.php?id=<?php echo $value['gig_userid'];  ?>"><?php if (isset($username)) {
								 echo $username;
							} ?></a><span class="badge badge-primary" style="float: right;"><?php echo $value['abbreviation']; ?></span><span style="clear: right;"></span></p>

						<p style="padding:5px; height: 50px;">	<a href="gig_publicview.php?gigid=<?php if(isset($value['gig_id'])){ echo $value['gig_id']; }?>&sellerid=<?php if(isset($value['gig_userid'])){echo $value['gig_userid']; } ?>"><?php if (isset($gigtitle)) {
								 echo $gigtitle;
							} ?></a></p>
						<p style="margin-left:40%">	<a  href="#">For just <b class="badge badge-info">&#8358;<?php if (isset($gig_basicprice)) {
								 echo $gig_basicprice;
							} ?></b></a></p>
							
						</div>
						</div>

					<?php

						}
					?>
					
				</div>
			</div>
		</div>

		<!-- Marketplace section -->

		<div class="row d-flex" style="background-color: #FAF7EB; padding: 5px;">
			<div class="col-md">
				<div class="row">
					<div class="col-md" style="margin-bottom: 5px;">
						<h3 class="my-textAlign" style="padding: 1%; border-bottom: #4B0082 solid 1px;  border-top: #4B0082 solid 1px; color: #4B0082">Explore The Marketplace</h3>
					</div>
				</div>

				<div class="row">

					<?php
						foreach ($market as $key => $value) {
						
					 ?>
					<div class="col-md d-flex justifyForMe">
						<a href="marketgigs.php?id=<?php echo $value['marketplace_id']; ?>"><div class="marketbox my-textAlign box1">
							<!-- <img src="images/13522.jpg" width="250" height="120"> -->
							<p class="marketext "><?php echo $value['marketplace_name']; ?></p>
						</div></a>
					</div>


					<?php } ?>

					
				</div>
			</div>
		</div>

		<!-- Find freelance service and get started section -->

		<div class="row" style="background-color: #DDA0DD;">
			<div class="col-md">
				<div id="getStartedImage">
					<h2>Find Freelance Services For Your Business Today</h2>
					<p>We've got you covered for all your business needs</p>

					<a href="fullregisteration.php"><button class="btn btn-outline-light" style="background-color: #4B0082; color: white">Get Started</button></a>
				</div>
			</div>
		</div>

		



<!-- Footer section-->

		<?php
		include 'footer.php';
		?>