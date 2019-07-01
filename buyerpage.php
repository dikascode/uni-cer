<?php
	
		include_once ('buyer_header.php');

?>

		
		<div class="row" id="userArea">
			<!-- user info area/left pane -->
			<div class="col-md-3">
				
					<?php include_once('buyer_side_bar.php'); ?>

			<div class="row">
					<div class="col-md">
						<h5 style="float: left;">Description</h5> <a class="purpletext" href="#" style="float: right;">Edit Description <i class="fas fa-pen purpletext"></i></a>
						<div style="clear: both;"></div>
						
						 <hr>
						
					</div>
			</div>

				
	<!-- right pane -->
			</div>

			<div class="col-md" id="rightPane">

				<h4 style="margin-top: 5%;">Hello <?php echo $_SESSION['username'] ?>, what would you love to do today?</h4>
				<h5 style="color: grey">You can start by searching for the most talented Nigerian students.</h5>

				<div class="row">
					<div class="col-md">
						<form style="margin-top: 2%;" class="form-inline" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>">
						    <input autocomplete="off" id="search" name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						    <input value="Search" name="searchbtn" class="btn btn-outline-light my-2 my-sm-0" type="submit" style="background-color: #4B0082; color:white">
						</form>

						<div id="displaySearch" style="border: width: 220px; height: 50px; position: absolute; top:50px; z-index: 10;"></div>
					</div>
				</div>

				<hr>

				<div class="row">
					<div class="col-md purplebg">
						<h6 style="text-align: center; margin-top: 1%">Activity Area</h6>
					</div>
				</div>

			</div>
			</div>

		


		

	
		<!-- Footer section-->

		<?php
		include 'footer.php';
		?>

