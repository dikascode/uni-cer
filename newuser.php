<?php
	
		include_once ('header2.php');

	
						$gigobj = new Gigs;

						$gigs = $gigobj->getGigs($_SESSION['userid']); 
		
	

		

		// var_dump($gigs);
		// exit;

?>

		
		<div class="row" id="userArea">
			<!-- user info area/left pane -->
			<div class="col-md-3">
				
					<?php include_once('user_side_bar.php'); ?>

				

	
			</div>

			<!-- right pane -->

			<div class="col-md-9" id="rightPane">
				<div class="row">
					<div class="col-md purpletext" style="margin-bottom: 20px;">
						<h4>Gigs</h4>
					</div>
				</div>

				<!-- Gig profiles -->
				<div class="row">
					<div class="col-md d-flex">
						<?php if (count($gigs) > 0) { ?>

							<h3 class="purpletext animated flash">Welcome, <?php echo $_SESSION['username'] ?>.</h3><a style="margin-left:10px;" href="gig-setup-form.php?id=<?php echo $_SESSION['userid'] ?>&name=<?php echo $_SESSION['username'] ?>" class="btn join-button">Create a New Gig <i class="fas fa-plus"></i></a>
							
						<?php }else {?>
						<h3 class="purpletext animated flash">Hello, <?php echo $_SESSION['firstname'] ?> looks like you don't have a gig, yet.</h3><a style="margin-left:10px;" href="gig-setup-form.php?id=<?php echo $_SESSION['userid'] ?>&name=<?php echo $_SESSION['username'] ?>" class="btn join-button">Create a New Gig <i class="fas fa-plus"></i></a>

					<?php } ?>
					</div>

				</div>

				<hr>

				<!-- Created Gig profiles -->
				<div class="row">
					
						
				
					<?php foreach ($gigs as $key => $value) {
						$gigimage = $value['gig_headerpic'];
						$gigtitle = $value['gig_title'];
						$gig_basicprice = $value['basic_price'];
					 ?>

					 	<div class="col-md-4 d-flex justifyForMe">
						<div class="gigBox">
							<div style="width:230px; height:180px; background-color: black;">
							<img class="img-fluid" src="<?php if (isset($gigimage)) {
								 echo $gigimage;
							} ?>">
						</div>
						<p style="padding:5px; height: 50px;">	<a href="#"><?php if (isset($gigtitle)) {
								 echo $gigtitle;
							} ?></a></p>
							
							<!-- <hr> -->

						<p style="margin-left:50%">	<a  href="#">For just <b class="badge badge-info">&#8358;<?php if (isset($gig_basicprice)) {
								 echo $gig_basicprice;
							} ?></b></a></p>
						</div>
					</div>


					 <?php } ?>


				</div>
			</div>
		</div>
		</div>

		
		
		

		
	

		<!-- Footer section-->

		<?php
		include 'footer.php';
		?>

