<?php
		session_start();
		include_once ('header2.php');

	
						$gigobj = new Gigs;

						$gigs = $gigobj->getGigs($_GET['id']);


						 $infobj = new User;

					 $output = $infobj->getSigDesc($_SESSION['userid']);

						// echo "<pre>"; 
						// print_r($gigs);
						// echo "</pre>";
						// exit;
		
?>

		
		<div class="row" id="userArea">
			<!-- user info area/left pane -->
			<div class="col-md-3">
				
					<?php include_once('seller_edit_side_bar.php'); ?>

				

	
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

							<h3 class="purpletext animated flash">Welcome, <?php if(isset($_SESSION['username'])){ echo $_SESSION['username']; } ?>.</h3><a style="margin-left:10px;" href="gig-setup-form.php?id=<?php echo $_SESSION['userid'] ?>&name=<?php echo $_SESSION['username'] ?>" class="btn join-button">Create a New Gig <i class="fas fa-plus"></i></a>
							
						<?php }else {?>
						<h3 class="purpletext animated flash">Hello, <?php if(isset($_SESSION['username'])){ echo $_SESSION['username']; }?> looks like you don't have a gig, yet.</h3><a style="margin-left:10px;" href="gig-setup-form.php?id=<?php echo $_SESSION['userid'] ?>&name=<?php echo $_SESSION['username'] ?>" class="btn join-button">Create a New Gig <i class="fas fa-plus"></i></a>

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
						$_SESSION['signature'] = $value['user_signature'];
						$_SESSION['user_desc'] = $value['user_desc'];

						// var_dump($_SESSION['signature'] );
					 ?>

					 	<div class="col-md-4 d-flex justifyForMe">
						<div class="gigBox">
							<div class="img-fluid" style="width:230px; height:180px; background-color: black; background-image: url('<?php if (isset($gigimage)) {
								 echo $gigimage;
							} ?>'); background-repeat: no-repeat; background-size: cover;">
							<!-- <img  alt="<?php echo $gigtitle ?>" class="img-fluid" style="width: 230px; height: 180px" src="<?php if (isset($gigimage)) {
								 echo $gigimage;
							} ?>"> -->
						</div>
						<p style="padding:5px; height: 50px;">	<a href="gig_publicview.php?gigid=<?php if(isset($value['gig_id'])){ echo $value['gig_id']; }?>&sellerid=<?php if(isset($value['gig_userid'])){echo $value['gig_userid']; } ?>"><?php if (isset($gigtitle)) {
								 echo $gigtitle;
							} ?></a></p>
							
							<!-- <hr> -->

						<p style="margin-left:2%">	<a  href="#">For just <b class="badge badge-info">&#8358;<?php if (isset($gig_basicprice)) {
								 echo $gig_basicprice;
							} ?></b></a></p>
						</div>
					</div>


					 <?php } ?>


				</div>
			</div>
		</div>

		<!-- Footer section-->

		<?php
		include 'footer.php';
		?>

