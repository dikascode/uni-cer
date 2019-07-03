<?php
		session_start();
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

						$gigs = $gigobj->getGigs($_GET['id']);

						$id = count($gigs) - 1;

						// echo count($gigs);

						// echo "<pre>";
						// print_r($gigs[0]['user_username']);
						// echo "<pre>";
						// exit;


						//save some info about seller to varaibles because i can't use session in a public view area

						$sellergender = $gigs[$id]['user_gender'];
						$sellerimage= $gigs[$id]['user_picture'];
						$datereg = date('j M Y', strtotime($gigs[$id]['user_datereg']));
						$sellerdesc= $gigs[$id]['user_desc'];
						$uniabbr= $gigs[$id]['abbreviation'];
						$username= $gigs[0]['user_username'];
						$signature = $gigs[$id]['user_signature'];



									


						
		


?>

		
		<div class="row" id="userArea">
			<!-- user info area/left pane -->
			<div class="col-md-3">
				
					<?php include_once('publicuser_side_bar.php'); ?>

				

	
			</div>

			<!-- right pane -->

			<div class="col-md-9" id="rightPane">
				<div class="row" style="margin-top: 20px;">
					<div class="col-md purpletext" style="margin-bottom: 20px;">
						<h4><?php if (isset($username)) {
									echo $username;
								} ?>'s Gigs</h4>
					</div>
				</div>

				<!-- User Gig profiles -->
				<!-- <div class="row">
					<div class="col-md d-flex">
						<?php if (count($gigs) > 0) { ?>

							<h3 class="purpletext animated flash">Welcome, <?php echo $_SESSION['username'] ?>.</h3><a style="margin-left:10px;" href="gig-setup-form.php?id=<?php echo $_SESSION['userid'] ?>&name=<?php echo $_SESSION['username'] ?>" class="btn join-button">Create a New Gig <i class="fas fa-plus"></i></a>
							
						<?php }else {?>
						<h3 class="purpletext animated flash">Hello, <?php echo $_SESSION['firstname'] ?> looks like you don't have a gig, yet.</h3><a style="margin-left:10px;" href="gig-setup-form.php?id=<?php echo $_SESSION['userid'] ?>&name=<?php echo $_SESSION['username'] ?>" class="btn join-button">Create a New Gig <i class="fas fa-plus"></i></a>

					<?php } ?>
					</div> -->

				<!-- </div> -->

				<!-- <hr> -->

				<!-- Created Gig profiles -->
				<div class="row">
					
						
				
					<?php foreach ($gigs as $key => $value) {
						$gigimage = $value['gig_headerpic'];
						$gigtitle = $value['gig_title'];
						$gig_basicprice = $value['basic_price'];
					 ?>

					 	<div class="col-md-4 d-flex justifyForMe">
						<div class="gigBox">

							<!-- <img alt="<?php echo $gigtitle ?>" class="img-fluid" style="width: 230px;" src="<?php if (isset($gigimage)) {
								 echo $gigimage;
							} ?>"> -->
							<div class="img-fluid" style="width:230px; height:180px; background-color: black; background-image: url('<?php if (isset($gigimage)) {
								 echo $gigimage;
							} ?>'); background-repeat: no-repeat; background-size: cover;">
							
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

