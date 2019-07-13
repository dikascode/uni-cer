<?php
		session_start();
		if ($_SESSION['usertype'] == '1') {
						include_once('header2.php');
					 }else{

					 	header("Location: http://localhost/6thprojectphp/signin.php");
					 }

					  $infobj = new User;

					 $output = $infobj->getSigDesc($_SESSION['userid']);

					 //  echo "<pre>";
					 // print_r($output);
					 // echo "</pre>";
					 // exit;

	
						$gigobj = new Gigs;

						$gigs = $gigobj->getGigs($_SESSION['userid']);


						$orderobj = new Order;

						$result = $orderobj->getSubmittedOrdersForBuyer($_SESSION['userid']);

						// echo "<pre>"; 
						// print_r($result);
						// echo "</pre>";
						// exit;
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$selection = $_REQUEST['selection'];

			if (isset($selection) && $selection == '1') {
				$status = 'Completed';
				$orderobj->amountEarned($_SESSION['orderid_status'], $status);
			}


			if (isset($selection) && $selection == '2') {
				$status = 'Revision Requested';
			}

			if (isset($selection) && $selection == '3') {
				$status = 'Cancelled';
			}


			$orderobj->updateStatus($status, $_SESSION['orderid_status']);



		}
		
?>

		
		<div class="row" id="userArea">
			<!-- user info area/left pane -->
			<div class="col-md-3">
				
					<?php include_once('user_side_bar.php'); ?>

				

	
			</div>

			<!-- right pane -->

			<div class="col-md-9" id="rightPane">
				<?php if (isset($_GET['report'])) {
						echo $_GET['report'];
						}  ?>
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
						<h3 class="purpletext animated flash">Hello, <?php echo $_SESSION['username'] ?> looks like you don't have a gig, yet.</h3><a style="margin-left:10px;" href="gig-setup-form.php?id=<?php echo $_SESSION['userid'] ?>&name=<?php echo $_SESSION['username'] ?>" class="btn join-button">Create a New Gig <i class="fas fa-plus"></i></a>

					<?php } ?>
					</div>

				</div>

				<hr>

				<!-- Created Gig profiles -->
				<div class="row">
					
						
				
					<?php foreach ($gigs as $key => $value) {
						$gigimage = $value['gig_headerpic'];
						$gigtitle = $value['gig_title'];
						$gig_basicprice = number_format($value['basic_price']);
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


				<div class="row">
					<div class="col-md purplebg">
						<h6 style="text-align: center; margin-top: 1%">Activity Area</h6>

						<?php 

							foreach ($result as $key => $value) {
								
								$gigdesc = $value['order_description'];
								$gigimg = $value['user_picture'];
								$sellername = $value['user_username'];
								$orderdate = date('j M Y', strtotime($value['order_date']));
								$orderdue = date('j M Y', strtotime($value['order_deadline']));
								$orderprice = number_format(($value['order_amount']-100), 2);
								$_SESSION['orderid_status'] = $value['order_id'];

								if ($value['order_status'] == 'Submitted') {
									
								
							
						?>

						<!-- display orders that has been delivered -->

							<div class="purpletext" style="min-height: 70px; margin-top: 2%; margin-bottom: 2%; border: 1px solid tomato; padding: 1%; min-width: 600px; background-color: white;">
								<img class="rounded-circle" style="width: 40px; height: 40px" src="<?php if(isset($gigimg)){echo $gigimg;} ?>"><span style="margin-left: 1%;"><?php if(isset($sellername)){echo $sellername;} ?> | </span><span  style="margin-left: 1%;"><?php if(isset($gigdesc)){echo $gigdesc;} ?> | </span><span class="badge badge-primary" style="margin-left: 1%;">&#8358;<?php if(isset($orderprice)){echo $orderprice;} ?></span> |<span style="margin-left: 1%;"><?php if(isset($orderdue)){echo $orderdue;} ?></span>
								<small style="font-weight: bold; margin-left: 1%;"><?php if(isset($sellername)){echo $sellername;} ?> has delivered your order. See delivery in inbox.</small><br><span style="margin-left: 1%; font-weight: bold;">Mark as:</span>
												<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
													<select style="margin-left: 1%;" name="selection">
														<option value="">Make Selection</option>
														<option value="1">Completed</option>
														<option value="2">Revision Required</option>
														<option value="3">Cancelled</option>
													</select>
												
													<input style="margin-left: 2%" class="btn btn-sm join-button" type="submit" name="submit" value="Proceed">
												</form>
							</div>

						<?php } } ?>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer section-->

		<?php
		include 'footer.php';
		?>

