<?php
	session_start();
		include_once ('buyer_header.php');



						$orderobj = new Order;

						$result = $orderobj->getOrdersForBuyer($_SESSION['userid']);

						 $infobj = new User;

						 $output = $infobj->getSigDesc($_SESSION['userid']);

						// echo "<pre>"; 
						// print_r($result);
						// echo "</pre>";
						// exit;
		if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_REQUEST['submit'] == 'Proceed') {
			$selection = $_REQUEST['selection'];

			if (isset($selection) && $selection == '1') {
				$status = 'Completed';
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
				
					<?php include_once('buyer_edit_side_bar.php'); ?>

			

				
	<!-- right pane -->
			</div>

			<div class="col-md" id="rightPane">

				<h4 style="margin-top: 5%;">Hello <?php echo $_SESSION['username'] ?>, welcome back. We can't wait to help you complete your next project.</h4>
				<!-- <h5 style="color: grey">You can start by searching for the most talented Nigerian students.</h5> -->

				<!-- <div class="row">
					<div class="col-md">
						<form style="margin-top: 2%;" class="form-inline" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>">
						    <input autocomplete="off" id="search" name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						    <input value="Search" name="searchbtn" class="btn btn-outline-light my-2 my-sm-0" type="submit" style="background-color: #4B0082; color:white">
						</form>

						<div id="displaySearch" style="border: width: 220px; height: 50px; position: absolute; top:50px; z-index: 10;"></div>
					</div>
				</div> -->


				<hr>

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
								<small style="font-weight: bold; margin-left: 1%;"><?php if(isset($sellername)){echo $sellername;} ?> has delivered your order.</small><br><span style="margin-left: 1%; font-weight: bold;">Mark as:</span>
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

