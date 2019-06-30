
		<!-- Header/Menu baR -->


		<?php

			include_once 'header2.php';

			$orderobj = new Order;

			$result = $orderobj->getOrdersForUser($_GET['id']);



			// echo "<pre>";
			// print_r($result);
			// echo "</pre>";

		?>

		<!-- Order manager section -->

		<div class="row">
			<div class="col-md">
				<div class="row">
					<div class="col-md">
						<h3>MANAGE YOUR ORDERS</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10">
						<ul class="gig-list">
							<li><a class="" data-toggle="collapse" href="#collapseNew" role="button" aria-expanded="false" aria-controls="collapseNew">Active <span class="badge badge-primary"><?php if (isset($_SESSION['active_total'])) {
								echo $_SESSION['active_total'];
							} ?></span></a></li>

							<li><a class="" data-toggle="collapse" href="#collapseActive" role="button" aria-expanded="false" aria-controls="collapseActive">Completed <span class="badge badge-success"></span></a></li>

							<li><a class="" data-toggle="collapse" href="#collapseCompleted" role="button" aria-expanded="false" aria-controls="collapseCompleted">Late <span class="badge badge-warning"></span></a></li>

							<li><a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Pending Approval <span class="badge purplebg"></span></a></li>

							<li><a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Cancelled <span class="badge badge-danger"></span></a></li>
							
						</ul>
					</div>

					
				</div>

				<div class="row">
					<div class="col-md"><hr></div>
				</div>
			</div>
		</div>

		<!-- Collapse for New order sub-menu here -->

		<div class="row" style="margin-bottom: 10px;">
			<div class="col-md table-responsive">
				<div class="collapse show active" id="collapseNew">
				  <div class="card card-body" >
				    <div class="row">
				    	<div class="col-md-6"><p>NEW ORDERS</p></div>
				    	
				    </div>
				    <div class="row">
				    	<div class="col-md">
				    		<table class="table table-bordered table-hover">
				    			<thead class="thead-dark">
				    				<th>BUYER</th>
				    				<th>GIG</th>
				    				<th>ORDER DATE</th>
				    				<th>DUE ON</th>
				    				<th>TOTAL</th>
				    				<th>STATUS</th>
				    				
				    			</thead>

				    			<tbody>

				    				<?php 

				    					foreach ($result as $key => $value) {

				    						if ( date('j M Y', strtotime($value['order_deadline'])) > date('j M Y')) {
				    						
				    						
				    						$username = strtolower($value['user_username']);
											$buyerpic = $value['user_picture'];
											$gigimage = $value['gig_headerpic'];
											$gigtitle = $value['gig_title'];
											$orderdate = date('j M Y', strtotime($value['order_date']));
											$orderdue = date('j M Y', strtotime($value['order_deadline']));
											$orderprice = number_format($value['order_amount'], 2);


											//$orderstatus = $value['order_status'];
				    					

				    				?>

				    				<tr>
				    					<td><img class="img-fluid rounded-circle" src="<?php echo $buyerpic; ?>" style="margin-right: 1%; height: 50px; width: 50px;"> <?php echo $username; ?></td>
				    					<td><img src="<?php echo $gigimage; ?>" style="margin-right: 1%; width: 100px; height: 50px;"><a href="gig_publicview.php?gigid=<?php if(isset($value['gig_id'])){ echo $value['gig_id']; }?>&sellerid=<?php if(isset($value['gig_userid'])){echo $value['gig_userid']; } ?>"><?php echo $gigtitle; ?></a></td>
				    					<td><?php echo $orderdate; ?></td>
				    					<td><?php echo $orderdue; ?></td>
				    					<td>&#8358;<?php echo $orderprice; ?></td>
				    					<td><p class="badge badge-warning">Active</p></td>
				    					
				    					
				    				</tr>

				    				<?php }} $_SESSION['active_total'] = count($result[$value][$key]); ?>

				    				
				    				
				    			</tbody>
				    		</table>
				    	</div>
				    </div>

				     <!-- <div class="row">
				    	<div class="col-md"> -->
				    		<!-- p tag here to insert information for active gig -->
				    		<!--<p></p> 
				    	</div>
				    </div>

				</div>
			</div>
		</div>
	</div>
 -->
	<!-- Active Order Collapse -->
	<!-- <div class="row">
			<div class="col-md table-responsive">
				<div class="collapse" id="collapseActive">
				  <div class="card card-body" >
				    <div class="row">
				    	<div class="col-md-6"><p>ACTIVE ODERS</p></div>
				    	
				    </div>
				    <div class="row">
				    	<table class="table table-bordered table-hover">
				    			<thead class="thead-dark">
				    				<th></th>
				    				<th>BUYER</th>
				    				<th>GIG</th>
				    				<th>DUE ON</th>
				    				<th>TOTAL</th>
				    				<th>STATUS</th>
				    				
				    			</thead>

				    			<tbody>

				    				<tr>
				    					<td><img class="img-fluid rounded-circle" src="images/....jpg" ></td>
				    					<td><img class="img-fluid rounded-circle" src="images/....jpg" width="50px" height="50px" style="margin-right: 1%;">salako</td>
				    					<td><img src="" width="70px" height="50px" style="margin-right: 1%;"><a href="#">I will build your website with php</a></td>
				    					<td>July 20, 2019</td>
				    					<td>N400000</td>
				    					<td><p class="badge badge-warning">NEW</p></td>
				    					
				    					
				    				</tr>

				    				<tr>
				    					<td><img class="img-fluid rounded-circle" src="images/....jpg" ></td>
				    					<td><img class="img-fluid rounded-circle" src="images/....jpg" width="50px" height="50px" style="margin-right: 1%;">babat</td>
				    					<td><img src="" width="70px" height="50px" style="margin-right: 1%;"><a href="#">I will build your website with python</a></td>
				    					<td>Nov 18, 2019</td>
				    					<td>N550000</td>
				    					<td><p class="badge badge-warning">NEW</p></td>
				    					
				    					
				    				</tr>

				    				
				    				
				    			</tbody>
				    		</table>
				    	</div>
				    </div>

				    <div class="row">
				    	<div class="col-md">-->

				    		 <!-- p tag for inner html here  -->
				    		<p></p><!-- 
				    	</div>
				    </div>
				</div>
			</div>
		</div> -->
	



	<!-- Completed Orders Collapse -->
	<!-- <div class="row">
			<div class="col-md table-responsive">
				<div class="collapse" id="collapseCompleted">
				  <div class="card card-body" >
				    <div class="row">
				    	<div class="col-md-6"><p>COMPLETED ODERS</p></div>
				    	
				    </div>
 -->
				    <!-- table row -->
				    <!-- <div class="row">
				    	<table class="table table-bordered table-hover">
				    			<thead class="thead-dark">
				    				<th></th>
				    				<th>BUYER</th>
				    				<th>GIG</th>
				    				<th>DUE ON</th>
				    				<th>TOTAL</th>
				    				<th>STATUS</th>
				    				
				    			</thead>

				    			<tbody>

				    				<tr>
				    					<td><img class="img-fluid rounded-circle" src="images/....jpg" ></td>
				    					<td><img class="img-fluid rounded-circle" src="images/....jpg" width="50px" height="50px" style="margin-right: 1%;">salako</td>
				    					<td><img src="" width="70px" height="50px" style="margin-right: 1%;"><a href="#">I will build your website with php</a></td>
				    					<td>July 20, 2019</td>
				    					<td>N400000</td>
				    					<td><p class="badge badge-success">COMPLETED</p></td>
				    					
				    					
				    				</tr>

				    				<tr>
				    					<td><img class="img-fluid rounded-circle" src="images/....jpg" ></td>
				    					<td><img class="img-fluid rounded-circle" src="images/....jpg" width="50px" height="50px" style="margin-right: 1%;">babat</td>
				    					<td><img src="" width="70px" height="50px" style="margin-right: 1%;"><a href="#">I will build your website with python</a></td>
				    					<td>Nov 18, 2019</td>
				    					<td>N550000</td>
				    					<td><p class="badge badge-success">COMPLETED</p></td>
				    					
				    					
				    				</tr>

				    				<tr>
				    					<td><img class="img-fluid rounded-circle" src="images/....jpg" ></td>
				    					<td><img class="img-fluid rounded-circle" src="images/....jpg" width="50px" height="50px" style="margin-right: 1%;">salako</td>
				    					<td><img src="" width="70px" height="50px" style="margin-right: 1%;"><a href="#">I will build your website with php</a></td>
				    					<td>July 20, 2019</td>
				    					<td>N400000</td>
				    					<td><p class="badge badge-success">COMPLETED</p></td>
				    					
				    					
				    				</tr>

				    				<tr>
				    					<td><img class="img-fluid rounded-circle" src="images/....jpg" ></td>
				    					<td><img class="img-fluid rounded-circle" src="images/....jpg" width="50px" height="50px" style="margin-right: 1%;">babat</td>
				    					<td><img src="" width="70px" height="50px" style="margin-right: 1%;"><a href="#">I will build your website with python</a></td>
				    					<td>Nov 18, 2019</td>
				    					<td>N550000</td>
				    					<td><p class="badge badge-success">COMPLETED</p></td>
				    					
				    					
				    				</tr>

				    				<tr>
				    					<td colspan="6" class="my-textAlign">
				    						<a href="#" class="btn btn-sm purplebg">Click to see more</a>
				    					</td>
				    				</tr>

				    				
				    				
				    			</tbody>
				    		</table>
				    	</div>
				    </div>

				    <div class="row">
				    	<div class="col-md"> -->

				    		<!-- p tag for inner html from jquery from php here -->
				    	<!-- 	
				    	</div>
				    </div>
				</div>
			</div>
		</div>
	
 -->
	<!-- Late Order Collapse -->

	<!-- <div class="row">
			<div class="col-md table-responsive">
				<div class="collapse" id="collapseLate">
				  <div class="card card-body" >
				    <div class="row">
				    	<div class="col-md-6"><p>LATE ORDERS</p></div>
				    	
				    </div>
				    <div class="row">
				    	<div class="col-md">
				    		<table class="table table-bordered table-hover">
				    			<thead class="thead-dark">
				    				<th></th>
				    				<th>BUYER</th>
				    				<th>GIG</th>
				    				<th>DUE ON</th>
				    				<th>TOTAL</th>
				    				<th>STATUS</th>
				    				
				    			</thead>

				    			<tbody>

				    				

				    				
				    				
				    			</tbody>
				    		</table>
				    	</div>
				    </div>

				    <div class="row">
				    	<div class="col-md">
				    		<p>No late orders to display.</p>
				    	</div>
				    </div>
				</div>
			</div>
		</div>
	</div> -->
 

		
		
		
		

		
	

		<!-- Footer section-->

		<?php
		include 'footer.php';
		?>

