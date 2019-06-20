<?php
	
		include_once ('header2.php');

?>

		
		<div class="row" id="userArea">
			<!-- user info area/left pane -->
			<div class="col-md-3">
				<div class="row">
					<div class="col-md">
						<div style="text-align: center"><a href="#"><i class="fas fa-user-circle purpletext" style="font-size: 100px"></i></a></div>
						<h4 style=""><?php if (isset($_SESSION['username'])) {
							echo $_SESSION['username'];
						} ?></h4>
						<p>Tell us your story in one line <a href="#"><i class="fas fa-pen purpletext"></i></a></p>
						<hr>
					</div>
				</div>

				<div class="row">
					<div class="col-md">
						<p><i class="fas fa-map-marker-alt purpletext"></i><span> From</span><span style="float: right">FUT</span></p>
						<p><i class="fas fa-user purpletext"></i><span> Unilancer</span><span style="float: right">Since 2019</span></p>
						<!-- Something hidden here -->
						<p class="myHideStyle"><i class="fas fa-paper-plane purpletext"></i><span> Last Delivery</span><span style="float: right">1 day</span></p>
						<hr>

					</div>

				</div>

				<div class="row">
					<div class="col-md">
						<h5 style="float: left;">Description</h5> <a class="purpletext" href="#" style="float: right;">Edit Description <i class="fas fa-pen purpletext"></i></a>
						<div style="clear: both;"></div>
						<p>Your pitch line goes here</p>
						 <hr>
						
					</div>

				</div>

				<div class="row">
					<div class="col-md">
						<h5>Social Links</h5>
						<ul>
							<a href="#"><li>Facebook</li></a>
							<a href="#"><li>Google</li></a>
							<a href="#"><li>Linkedln</li></a>
							<a href="#"><li>Behance</li></a>
							<a href="#"><li>GitHub</li></a>
						</ul>
						<hr> 
					</div>
				</div>

				<div class="row">
					<div class="col-md">
						<h5>Skills</h5>
						<!-- Something hidden here -->
						<div class=" myHideStyle">
						<a href="#" class="badge badge-primary">JQuery</a> <a href="#" class="badge badge-warning">PHP</a> <a href="#" class="badge badge-success">HTML&CSS</a>
						<a href="#" class="badge badge-primary">SQL</a>
						</div>
					</div>
				</div>
			</div>

			<!-- right pane -->

			<div class="col-md" id="rightPane">
				<div class="row">
					<div class="col-md purpletext" style="margin-bottom: 20px;">
						<h4>Gigs</h4>
					</div>
				</div>

				<!-- Gig profiles -->
				<div class="row">
					<div class="col-md d-flex justifyForMe">
						<h3 class="purpletext animated flash">Looks like you don't have a gig, yet.</h3><button class="btn join-button">Create a New Gig <i class="fas fa-plus"></i></button>
					</div>

				</div>

				<hr>


				

			</div>
		</div>

		
		
		

		
	

		<!-- Footer section-->

		<?php
		include 'footer.php';
		?>

