

		<!-- header section -->

		<?php
			session_start();
			include_once 'header2.php';
			// var_dump ($_SESSION);
				
			// 	exit;
		?>

		
		<!-- user profile area section -->
		<div class="row" id="userArea">
			<!-- user info area/left pane -->
			<div class="col-md-3 ">

				<?php include_once('user_side_bar.php'); ?>
				
			</div>

			<!-- right pane -->

			<div class="col-md " id="rightPane">
				<div class="row">
					<div class="col-md purpletext" style="margin-bottom: 20px;">
						<h4>Gigs</h4>
					</div>
				</div>

				<!-- Gig profiles -->
				<div class="row">
					<div class="col-md d-flex justifyForMe">
						<div class="gigBox">
							<img src="images/laptop-3190194_1920.jpg" width="230" >
							<a href="#"><p style="margin:5px;">I will build your website with php</p></a>
							<hr>

							<a  href="#"><p style="margin-left:40%">For just <b class="badge badge-info">N50000</b></p></a>
						</div>
					</div>

					<div class="col-md d-flex justifyForMe">
						<div class="gigBox">
							<img src="images/code-1839406_1920.jpg" width="230" >
							<a href="#"><p style="margin:5px;">I will organise your database with MySql</p></a>
							<hr>

							<a  href="#"><p style="margin-left:40%">For just <b class="badge badge-info">N20000</b></p></a>
						</div>
					</div>

					<div class="col-md d-flex justifyForMe">
						<div class="gigBox">
							<img src="images/laptop-3190194_1920.jpg" width="230" >
							<a href="#"><p style="margin:5px;">I will build your website with Python</p></a>
							<hr>

							<a  href="#"><p style="margin-left:40%">For just <b class="badge badge-info">N80000</b></p></a>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md d-flex justifyForMe">
						<div class="gigBox">
							<img src="images/laptop-3190194_1920.jpg" width="230" >
							<a href="#"><p style="margin:5px;">I will build your website with php</p></a>
							<hr>

							<a  href="#"><p style="margin-left:40%">For just <b class="badge badge-info">N50000</b></p></a>
						</div>
					</div>

					<div class="col-md d-flex justifyForMe">
						<div class="gigBox">
							<img src="images/code-1839406_1920.jpg" width="230" >
							<a href="#"><p style="margin:5px;">I will organise your database with MySql</p></a>
							<hr>

							<a  href="#"><p style="margin-left:40%">For just <b class="badge badge-info">N20000</b></p></a>
						</div>
					</div>

					<div class="col-md d-flex justifyForMe">
						<div class="gigBox">
							<img src="images/laptop-3190194_1920.jpg" width="230" >
							<a href="#"><p style="margin:5px;">I will build your website with Python</p></a>
							<hr>

							<a  href="#"><p style="margin-left:40%">For just <b class="badge badge-info">N80000</b></p></a>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md d-flex justifyForMe">
						<div class="gigBox">
							<button class="btn join-button" style="margin-top: 40%; margin-left: 10%;">Create a New Gig <i class="fas fa-plus"></i></button>
						</div>
						
						
					</div>
				</div>

				<div class="row">
					<div class="col-md">
						<hr>
						<h4>Reviews</h4>
					</div>
				</div>

			</div>
		</div>

		
		
		

		
	

		<!-- Footer section-->

		<?php
		include 'footer.php';
		?>


	