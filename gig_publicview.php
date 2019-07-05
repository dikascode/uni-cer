

		<!-- Menu bar -->


		<?php
			session_start();
			if (!isset($_SESSION['userid'])) {	
		
	
			 	header("Location: http://localhost/6thprojectphp/signin.php");
			 }else{
				if ($_SESSION['usertype'] == '1') {
						include_once('header2.php');
					 }else{

					 	include_once('buyer_header.php');
					 }
			 }


			//instatiate class

			$gigid = $_GET['gigid'];
			$sellerid = $_GET['sellerid'];

			$gig = new Gigs;
			$result = $gig->getSingleGig($gigid, $sellerid);

			// echo "<pre>";
			// print_r($result);
			// echo "</pre>";
			// exit;
		?>

	
		<!-- Gig Public view section -->

		<div class="row" style="border-bottom: 1px solid lightgrey; padding-bottom: 10px;">
			<div class="col-md-8" style="padding-left: 3%;">
				<ul class="gig-list">
					<li><a href="#profile">Profile View</a></li>
					<li><a href="#gigplan">Sample Gig Plans</a></li>
					<li><a href="#desc">Description</a></li>
					<li><a href="#faq">FAQ</a></li>
					<li><a href="#review">Reviews</a></li>
				</ul>
			</div>

			<!-- <div class="col-md">
				<button class="btn boxshadow" style=""><i class="fas fa-heart"></i> LIKE <span class="badge badge-lg purplebg">40</span>
				</button> 
			</div> -->

			<!-- <div class="col-md" style="">
				<button class="btn boxshadow purpletext"><i class="fas fa-share-alt"></i> SHARE</button> -->
				<!-- <div style="clear: both;"></div> -->
			<!-- </div> -->

		</div>

		<!-- Row for Gig description and Gig plans -->

		<div class="row" style="padding: 1% 1% 0 5%;">
			<!-- column for gig description -->
			<div class="col-md-7" id="profile">
				<div class="row">
					<div class="col-md"><h3><?php echo $result['gig_title']; ?></h3></div>
				</div>

					<div class="row">
						<div class="col-md">
						<img class="img-fluid" alt="<?php if (isset($result['user_username'])) {
													echo strtolower( $result['user_username']);
												}  ?>" style="height: 40px; width: 40px;" src="<?php if(isset($result['user_picture'])){echo $result['user_picture']; } ?>"> <small style="font-weight: bold; margin-right: 5px"><?php if (isset($result['user_username'])) {
													echo strtolower( $result['user_username']);
												}  ?></small>
													<!-- //condition for seller level here -->
												<!-- <small><?php if (isset($_SESSION['total_order']) && $_SESSION['total_order'] > 20) {
													echo "Level 1 seller";
												}elseif (isset($_SESSION['total_order']) && $_SESSION['total_order'] > 50) {
													echo "Level 1 seller";
												}else{
													echo "New seller";
												} ?></small> | <small><a href="#">(<?php if (isset($_SESSION['total_order'])) {
													echo $_SESSION['total_order'];
												} ?>) orders</a></small> | <span class="badge badge-primary"><?php if (isset($_SESSION['active_total'])) {
													echo $_SESSION['active_total'];
												} ?> Orders in Queue</span> --></div>
						<!-- <div class="col-md-2">
						<ul class="gig-public"><li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></li>
							
						</ul>
					</div> -->
					</div>

					<div class="row">
						<div class="col-md" style="padding: 20px;">
							
								<div id="carouselExampleControls" class="carousel slide" data-interval="false" data-ride="carousel">
									  <div class="carousel-inner">
									    <div class="carousel-item active">
									      <img style="width: 150px; height:300px;" src="<?php if(isset($result['gig_headerpic'])){
									      	if(strlen($result['gig_headerpic']) == 0){ echo 'images/newdika.jpg'; }else{echo $result['gig_headerpic']; } 
									      }?>" class="d-block w-100 img-fluid" alt="<?php if (isset($result['user_username'])) {
													echo strtolower( $result['user_username']);
												}  ?>">
									    </div>
									   <!--  <div class="carousel-item">
									      <img class="img-fluid" src="images/php_snip.jpg" class="d-block w-100" alt="User code image">
									    </div> -->
									   <!--  <div class="carousel-item">
									      <img src="" class="d-block w-100" alt="...">
									    </div> -->
									  </div>
									 <!--  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
									    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
									    <span class="sr-only">Previous</span>
									  </a>
									  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
									    <span class="carousel-control-next-icon" aria-hidden="true"></span>
									    <span class="sr-only">Next</span>
									  </a> -->
								</div>

						</div>
					</div>

					<div class="row">
						<div class="col-md" id="gigplan"><h3>Gig Plans</h3></div>
					</div>

					<div class="row">
						<div class="col-md table-responsive">
							<table class="table table-striped table-hover">

								<tbody>
									<tr>
										<td>Plan</td>
										<td class="my-textAlign" width="25%">
											<p>&#8358;<?php echo $result['premium_price']; ?></p>
											<p class="myBold">PREMIUM</p>
											<p class="myBold"><?php echo $result['premium_title']; ?></p>
											<p><?php if (isset($result['premium_desc'])) {
												echo $result['premium_desc'];
											} ?></p>
										</td>
										<td class="my-textAlign" width="25%">
											<p>&#8358;<?php echo $result['standard_price']; ?></p>
											<p class="myBold">STANDARD</p>
											<p class="myBold"><?php echo $result['standard_title']; ?></p>
											<p><?php if (isset($result['standard_desc'])) {
												echo $result['standard_desc'];
											} ?></p>
										</td>
										<td class="my-textAlign" width="25%">
											<p>&#8358;<?php echo $result['basic_price']; ?></p>
											<p class="myBold">BASIC</p>
											<p class="myBold"><?php echo $result['basic_title']; ?></p>
											<p><?php if (isset($result['basic_desc'])) {
												echo $result['basic_desc'];
											} ?></p>
										</td>
									</tr>

									<tr>
										<td>Custom Design</td>
										<td class="my-textAlign">
											<?php if (isset($result['premium_cd'])) {
												if ($result['premium_cd'] == '1') {
													echo "<i class=\"fas fa-check-circle purpletext\"></i>";
												}else{
													echo "";
												}
											} ?>
											
										</td>
										<td class="my-textAlign"><?php if (isset($result['standard_cd'])) {
												if ($result['standard_cd'] == '1') {
													echo "<i class=\"fas fa-check-circle purpletext\"></i>";
												}else{
													echo "";
												}
											} ?></i></td>
										<td class="my-textAlign"><?php if (isset($result['basic_cd'])) {
												if ($result['basic_cd'] == '1') {
													echo "<i class=\"fas fa-check-circle purpletext\"></i>";
												}else{
													echo "";
												}
											} ?></td>
									</tr>

									<tr>
										<td>Responsive Design</td>
										<td class="my-textAlign"><?php if (isset($result['premium_rd'])) {
												if ($result['premium_rd'] == '1') {
													echo "<i class=\"fas fa-check-circle purpletext\"></i>";
												}else{
													echo "";
												}
											} ?></td>
										<td class="my-textAlign"><?php if (isset($result['standard_rd'])) {
												if ($result['standard_rd'] == '1') {
													echo "<i class=\"fas fa-check-circle purpletext\"></i>";
												}else{
													echo "";
												}
											} ?></td>
										<td class="my-textAlign"><?php if (isset($result['basic_rd'])) {
												if ($result['basic_rd'] == '1') {
													echo "<i class=\"fas fa-check-circle purpletext\"></i>";
												}else{
													echo "";
												}
											} ?></td>
									</tr>

									<tr>
										<td>Include Source Code</td>
										<td class="my-textAlign"><?php if (isset($result['premium_sc'])) {
												if ($result['premium_sc'] == '1') {
													echo "<i class=\"fas fa-check-circle purpletext\"></i>";
												}else{
													echo "";
												}
											} ?></td>
										<td class="my-textAlign"><?php if (isset($result['standard_sc'])) {
												if ($result['standard_sc'] == '1') {
													echo "<i class=\"fas fa-check-circle purpletext\"></i>";
												}else{
													echo "";
												}
											} ?></td>
										<td class="my-textAlign"><?php if (isset($result['basic_sc'])) {
												if ($result['basic_sc'] == '1') {
													echo "<i class=\"fas fa-check-circle purpletext\"></i>";
												}else{
													echo "";
												}
											} ?></td>
									</tr>

									<tr>
										<td>Number of Pages</td>
										<td class="my-textAlign"><?php if (isset($result['premium_pages'])) {
													echo $result['premium_pages'];
												}?></td>
										<td class="my-textAlign"><?php if (isset($result['standard_pages'])) {
													echo $result['standard_pages'];
												}?></td>
										<td class="my-textAlign"><?php if (isset($result['basic_pages'])) {
													echo $result['basic_pages'];
												}?></td>
									</tr>

									<tr>
										<td>Number of Revisions</td>
										<td class="my-textAlign"><?php if (isset($result['premium_revisions'])) {
													echo $result['premium_revisions'];
												}?></td>
										<td class="my-textAlign"><?php if (isset($result['standard_revisions'])) {
													echo $result['standard_revisions'];
												}?></td>
										<td class="my-textAlign"><?php if (isset($result['basic_revisions'])) {
													echo $result['basic_revisions'];
												}?></td>
									</tr>

									<tr>
										<td>Delivery Time</td>
										<td class="my-textAlign"><?php if (isset($result['premium_delivery'])) {
													echo $result['premium_delivery'];
												}?> Days</td>
										<td class="my-textAlign"><?php if (isset($result['standard_delivery'])) {
													echo $result['standard_delivery'];
												}?> Days</td>
										<td class="my-textAlign"><?php if (isset($result['basic_delivery'])) {
													echo $result['basic_delivery'];
												}?> Days</td>
									</tr>

									<tr>
										<td></td>
										<td class="my-textAlign"><a href="confirm_order.php?sellerid=<?php echo $result['userid'];?>&gigid=<?php echo $result['gig_id'] ?>&gigplan=<?php echo $result['premium_title']  ?>" name="premium_select" class="btn join-button ">Select &#8358;<?php if (isset($result['premium_price'])) {
													echo $result['premium_price'];
												}?></a></td>
										<td class="my-textAlign"><a href="confirm_order.php?sellerid=<?php echo $result['userid'];?>&gigid=<?php echo $result['gig_id'] ?>&gigplan=<?php echo $result['standard_title']  ?>" name="standard_select" class="btn join-button ">Select &#8358;<?php if (isset($result['standard_price'])) {
													echo $result['standard_price'];
												}?></a></td>
										<td class="my-textAlign"><a href="confirm_order.php?sellerid=<?php echo $result['userid'];?>&gigid=<?php echo $result['gig_id'] ?>&gigplan=<?php echo $result['basic_title']  ?> " name="basic_select" class="btn join-button">Select &#8358;<?php if (isset($result['basic_price'])) {
													echo $result['basic_price'];
												}?></a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<!-- About Gig -->
					<div class="row">
						<div class="col-md">
						<div class="row">
							<div id="desc" class="col-md purplebg"><h3>About this Gig</h3></div>
						</div>

						<div class="row">
							<div class="col-md">
								<p class="myBold">
								<?php if (isset($result['gigdesc'])) {
													echo $result['gigdesc'];
												}?>
								</p>
								
							</div>
						</div>
						</div>
					</div>
				</div>

				<!-- <div class="col-md"></div> -->

				<!-- column for gig plans -->

				<div class="col-md" style="border: 1px lightgrey solid; padding: 1%;">
				<div class="row">
					<div class="col-md">
											
					    <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
					      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Premium</a>
					      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Standard</a>
					      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Basic</a>
					     
					    </div>

					</div>
				</div>

				<!-- Content row for list group -->

				<div class="row" style="margin-bottom: 10%">
					<div class="col-md">
						<div class="tab-content" id="nav-tabContent">
						      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
						      		<div class="row" style="padding: 2%">
						      			<!-- premium plan -->
						      			<div class="col-md-9"><p class="myBold"><?php echo $result['premium_title']; ?></p></div>
						      			<div class="col-md"><p style="float: right;">&#8358;<?php if (isset($result['premium_price'])) {
													echo $result['premium_price'];
												}?></p></div>
						      			<div style="clear: right;"></div>
						      		</div>

						      		<div class="row" style="padding: 2%">
						      			<div class="col-md"><p><?php if (isset($result['premium_desc'])) {
													echo $result['premium_desc'];
												}?></p></div>
						      			
						      		</div>

						      		<div class="row" style="padding: 2%">
						      			<div class="col-md"><span style="margin-right: 4%"><i class="fas fa-clock purpletext"></i> <?php if (isset($result['premium_delivery'])) {
													echo $result['premium_delivery'];
												}?> Delivery Days</span><span><i class="fas fa-redo purpletext"></i> <?php if (isset($result['premium_revisions'])) {
													echo $result['premium_revisions'];
												}?> Revisions</span>
						      			</div>

						      		</div>

						      			<div class="row">
						      				<div class="col-md">	
								      			<ul style="margin-left: 1%; padding: 1%;">
								      				<?php if (isset($result['premium_cd'])) {
													if ($result['premium_cd'] == '1') {
														echo "<li><i class=\"fas fa-check purpletext\"></i> Custom Design</li>";
													}else{
														echo "";
													}
													} ?>

													<?php if (isset($result['premium_rd'])) {
													if ($result['premium_rd'] == '1') {
														echo "<li><i class=\"fas fa-check purpletext\"></i> Responsive Design</li>";
													}else{
														echo "";
													}
													} ?>

													<?php if (isset($result['premium_sc'])) {
													if ($result['premium_sc'] == '1') {
														echo "<li><i class=\"fas fa-check purpletext\"></i> Include Source Code</li>";
													}else{
														echo "";
													}
													} ?>

													<?php if (isset($result['premium_pages'])) {
													if ($result['premium_pages'] > 0) {
														echo "<li><i class=\"fas fa-check purpletext\"></i> Number of Pages</li>";
													}else{
														echo "";
													}
													} ?>

													<?php if (isset($result['premium_revisions'])) {
													if ($result['premium_revisions'] > 0) {
														echo "<li><i class=\"fas fa-check purpletext\"></i> Number of Revisions</li>";
													}else{
														echo "";
													}
													} ?>
													
												
								      					
								      				<!-- <li><i class="fas fa-check purpletext"></i> Responsive Design</li>
								      				<li><i class="fas fa-check purpletext"></i> Include Source Code</li>
								      				<li><i class="fas fa-check purpletext"></i> Number of Pages</li>
								      				<li><i class="fas fa-check purpletext"></i> Number of Revisions</li> -->
								      			</ul>
						      				</div>
						      			</div>
						      			<div class="row">
						      				<div class="col-md my-textAlign">
						      					<a href="confirm_order.php?sellerid=<?php echo $result['userid'];?>&gigid=<?php echo $result['gig_id'] ?>&gigplan=<?php echo $result['premium_title']  ?>" name="premium_select" class="btn join-button form-control ">Select &#8358;<?php if (isset($result['premium_price'])) {
													echo $result['premium_price'];
												}?></a>
						      					<a href="#gigplan">Compare Plans</a>
						      				</div>
						      			</div>
						      </div>

						      <!-- standard plan -->
						      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">

						      		<div class="row" style="padding: 2%">
						      			<div class="col-md-9"><p class="myBold"><?php echo $result['standard_title']; ?></p></div>
						      			<div class="col-md"><p style="float: right;">&#8358;<?php if (isset($result['standard_price'])) {
													echo $result['standard_price'];
												}?></p></div>
						      			<div style="clear: right;"></div>
						      		</div>

						      		<div class="row" style="padding: 2%">
						      			<div class="col-md"><p><?php if (isset($result['standard_desc'])) {
													echo $result['standard_desc'];
												}?></p></div>
						      			
						      		</div>

						      		<div class="row" style="padding: 2%">
						      			<div class="col-md"><span style="margin-right: 4%"><i class="fas fa-clock purpletext"></i> <?php if (isset($result['standard_delivery'])) {
													echo $result['standard_delivery'];
												}?> Delivery Days</span><span><i class="fas fa-redo purpletext"></i> <?php if (isset($result['premium_revisions'])) {
													echo $result['standard_revisions'];
												}?> Revisions</span>
						      			</div>

						      		</div>

						      			<div class="row">
						      				<div class="col-md">	
								      			<ul style="margin-left: 1%; padding: 1%;">
								      				<?php if (isset($result['standard_cd'])) {
													if ($result['standard_cd'] == '1') {
														echo "<li><i class=\"fas fa-check purpletext\"></i> Custom Design</li>";
													}else{
														echo "";
													}
													} ?>

													<?php if (isset($result['standard_rd'])) {
													if ($result['standard_rd'] == '1') {
														echo "<li><i class=\"fas fa-check purpletext\"></i> Responsive Design</li>";
													}else{
														echo "";
													}
													} ?>

													<?php if (isset($result['standard_sc'])) {
													if ($result['standard_sc'] == '1') {
														echo "<li><i class=\"fas fa-check purpletext\"></i> Include Source Code</li>";
													}else{
														echo "";
													}
													} ?>

													<?php if (isset($result['standard_pages'])) {
													if ($result['standard_pages'] > 0) {
														echo "<li><i class=\"fas fa-check purpletext\"></i> Number of Pages</li>";
													}else{
														echo "";
													}
													} ?>

													<?php if (isset($result['standard_revisions'])) {
													if ($result['standard_revisions'] > 0) {
														echo "<li><i class=\"fas fa-check purpletext\"></i> Number of Revisions</li>";
													}else{
														echo "";
													}
													} ?>
								      			</ul>
						      				</div>
						      			</div>
						      			<div class="row">
						      				<div class="col-md my-textAlign">
						      					<a href="confirm_order.php?sellerid=<?php echo $result['userid'];?>&gigid=<?php echo $result['gig_id'] ?>&gigplan=<?php echo $result['standard_title']  ?>" name="standard_select" class="btn join-button form-control ">Select &#8358;<?php if (isset($result['standard_price'])) {
													echo $result['standard_price'];
												}?></a>
						      					<a href="#gigplan">Compare Plans</a>
						      				</div>
						      			</div>

						      </div>


						      <!-- Basic plan -->
						      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">

						      		<div class="row" style="padding: 2%">
						      			<div class="col-md-9"><p class="myBold"><?php echo $result['basic_title']; ?></p></div>
						      			<div class="col-md"><p style="float: right;">&#8358;<?php if (isset($result['basic_price'])) {
													echo $result['basic_price'];
												}?></p></div>
						      			<div style="clear: right;"></div>
						      		</div>

						      		<div class="row" style="padding: 2%">
						      			<div class="col-md"><p><?php if (isset($result['basic_desc'])) {
													echo $result['basic_desc'];
												}?></p></div>
						      			
						      		</div>

						      		<div class="row" style="padding: 2%">
						      			<div class="col-md"><span style="margin-right: 4%"><i class="fas fa-clock purpletext"></i> <?php if (isset($result['basic_delivery'])) {
													echo $result['basic_delivery'];
												}?> Days Delivery</span><span><i class="fas fa-redo purpletext"></i> <?php if (isset($result['basic_delivery'])) {
													echo $result['basic_delivery'];
												}?> Revisions</span>
						      			</div>

						      		</div>

						      			<div class="row">
						      				<div class="col-md">	
								      			<ul style="margin-left: 1%; padding: 1%;">
								      				<?php if (isset($result['basic_cd'])) {
													if ($result['basic_cd'] == '1') {
														echo "<li><i class=\"fas fa-check purpletext\"></i> Custom Design</li>";
													}else{
														echo "";
													}
													} ?>

													<?php if (isset($result['basic_rd'])) {
													if ($result['basic_rd'] == '1') {
														echo "<li><i class=\"fas fa-check purpletext\"></i> Responsive Design</li>";
													}else{
														echo "";
													}
													} ?>

													<?php if (isset($result['basic_sc'])) {
													if ($result['basic_sc'] == '1') {
														echo "<li><i class=\"fas fa-check purpletext\"></i> Include Source Code</li>";
													}else{
														echo "";
													}
													} ?>

													<?php if (isset($result['basic_pages'])) {
													if ($result['basic_pages'] > 0) {
														echo "<li><i class=\"fas fa-check purpletext\"></i> Number of Pages</li>";
													}else{
														echo "";
													}
													} ?>

													<?php if (isset($result['basic_revisions'])) {
													if ($result['basic_revisions'] > 0) {
														echo "<li><i class=\"fas fa-check purpletext\"></i> Number of Revisions</li>";
													}else{
														echo "";
													}
													} ?>
								      			</ul>
						      				</div>
						      			</div>
						      			<div class="row">
						      				<div class="col-md my-textAlign">
						      					<a href="confirm_order.php?sellerid=<?php echo $result['userid'];?>&gigid=<?php echo $result['gig_id'] ?>&gigplan=<?php echo $result['basic_title']  ?>" name="basic_select" class="btn join-button form-control ">Select &#8358;<?php if (isset($result['basic_price'])) {
													echo $result['basic_price'];
												}?></a>
						      					<a href="#gigplan">Compare Plans</a>
						      				</div>
						      			</div>

						      </div>
						      
						    </div>

						    <hr>

					</div>
				</div>


				<!-- row for column where user can contact buyer -->
				<div class="row">
					<div class="col-md">
						
						<div class="row">
							<div class="col-md my-textAlign">
								<div><img class="img-fluid rounded-circle" alt="<?php if (isset($result['user_username'])) {
													echo strtolower( $result['user_username']);
												}  ?>" src="<?php if(isset($result['user_picture'])){ echo $result['user_picture'];}?>" style='height: 100px; width: 100px;' ></div>

								<h4 style=""><a href="userpublicmode.php?id=<?php echo $result['gig_userid'];  ?>"><?php if (isset($result['user_username'])) {
													echo strtolower( $result['user_username']);
												} ?></a></h4>

								<p><?php if (isset($result['user_signature'])) {
									
								 echo $result['user_signature']; }?></p>
								<hr>
							</div>
						</div>

						<div class="row">
							<div class="col-md my-textAlign">
								<?php if ($sellerid == $_SESSION['userid']) {
								 ?>
								<a hidden href="quickmessage.php?sellerid=<?php echo $sellerid; ?>&userid=<?php echo $_SESSION['userid']; ?>&gigid=<?php echo $gigid; ?>" class="btn btn-md purplebg">Message Me</a>
								<hr>
								<?php }else{ ?>

									<a href="quickmessage.php?sellerid=<?php echo $sellerid; ?>&userid=<?php echo $_SESSION['userid']; ?>&gigid=<?php echo $gigid; ?>" class="btn btn-md purplebg">Message Me</a>
								<hr>

								<?php }?>
							</div>
						</div>

						<div class="row">
							<div class="col-md">
								<p><i class="fas fa-map-marker-alt purpletext"></i><span> From</span><span style="float: right"><?php if (isset($result['abbreviation'])) {
									echo $result['abbreviation'];
								} ?></span></p>
								<p><i class="fas fa-user purpletext"></i><span> Unilancer</span><span style="float: right">Since <?php if (isset($result['user_datereg'])) {
									echo date('j M Y', strtotime($result['user_datereg']));
								} ?></span></p>
								<!-- <p><i class="fas fa-paper-plane purpletext"></i><span> Last Delivery</span><span style="float: right">1 day </span></p>-->
								<hr>

							</div>

						</div>

						<div class="row">
							<div class="col-md">
								
								<div style="clear: both;"></div>
								<p><?php if(isset($result['user_desc'])){ echo $result['user_desc'];}  ?>
							
								</p>
								<!-- link to show the rest of the text -->
								<!-- <a href="#">See More</a> -->

								
								 <hr>
								
							</div>

						</div>

					</div>
				</div>
			</div>
			</div>	

			

		<!-- Footer section-->

		<?php
		include 'footer.php';
		?>