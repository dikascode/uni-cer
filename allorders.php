
		<!-- Header/Menu baR -->


		<?php
			session_start();
			if ($_SESSION['usertype'] == '1') {
				include_once('header2.php');
			}else{

			header("Location: http://localhost/6thprojectphp/signin.php");
			}



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
							<li><a class="" href="manageOrders.php?id=<?php echo $_SESSION['userid']; ?>" >Active <span class="badge badge-primary"><?php if (isset($_SESSION['active_total'])) {
								echo $_SESSION['active_total'];
							} ?></span></a></li>

							<li><a class="" data-toggle="collapse" href="#collapseActive" role="button" aria-expanded="false" aria-controls="collapseActive">All<span class="badge badge-success"></span></a></li>

							<!-- <li><a class="" data-toggle="collapse" href="#collapseCompleted" role="button" aria-expanded="false" aria-controls="collapseCompleted">Late <span class="badge badge-warning"></span></a></li>

							<li><a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Pending Approval <span class="badge purplebg"></span></a></li>

							<li><a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Cancelled <span class="badge badge-danger"></span></a></li> -->
							
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
				    				<th>S/N</th>
				    				<th>BUYER</th>
				    				<th>GIG</th>
				    				<th>ORDER DATE</th>
				    				<th>DUE ON</th>
				    				<th>TOTAL</th>
				    				<th>STATUS</th>
				    				<th></th>
				    				
				    			</thead>

				    			<tbody>

				    				<?php 
				    					$num = 0;
				    					foreach ($result as $key => $value) {
				    						$_SESSION['total_order'] = count($result);
				    						// var_dump($_SESSION['total_gig']); exit;


				    						// date('j M Y', strtotime($value['order_deadline'])) > date('j M Y')

				    						// if ($value['payment_status'] == 'Paid' && $value['order_status'] != 'Completed'  && $value['order_status'] != 'Submitted') {
				    						
				    						$username = strtolower($value['user_username']);
											$buyerpic = $value['user_picture'];
											$gigimage = $value['gig_headerpic'];
											$gigtitle = $value['gig_title'];
											$orderdate = date('j M Y', strtotime($value['order_date']));
											$orderdue = date('j M Y', strtotime($value['order_deadline']));
											$orderprice = number_format($value['order_amount'] - 100, 2);

											// var_dump(date('j M Y'));
											// exit;


											//$orderstatus = $value['order_status'];
				    				?>

				    				<tr>
				    					<td><?php echo ++$num; ?></td>
				    					<td><img class="img-fluid rounded-circle" src="<?php echo $buyerpic; ?>" style="margin-right: 1%; height: 50px; width: 50px;"> <?php echo $username; ?></td>
				    					<td><img src="<?php echo $gigimage; ?>" style="margin-right: 1%; width: 100px; height: 50px;"><a href="gig_publicview.php?gigid=<?php if(isset($value['gig_id'])){ echo $value['gig_id']; }?>&sellerid=<?php if(isset($value['gig_userid'])){echo $value['gig_userid']; } ?>"><?php echo $gigtitle; ?></a></td>
				    					<td><?php echo $orderdate; ?></td>
				    					<td><?php echo $orderdue; ?></td>
				    					<td>&#8358;<?php echo $orderprice; ?></td>

				    					<?php if ($value['order_status'] == 'Completed') {
				    						echo "<td><p class='badge badge-success'>Completed</p></td>";
				    						echo "<td></td>";
				    					}elseif($value['order_status'] == 'Revision Requested'){ ?>
				    						<td><p class='badge badge-warning'>Revision Requested</p></td>
				    						<td><a href="submitorder.php?orderid=<?php echo $value['order_id'];?>&sellerid=<?php echo $value['order_sellerid'];?>&buyerid=<?php echo $value['order_buyerid']; ?>" class="btn btn-sm btn-primary">Submit Order</a></td>
				    					<?php 
				    					}elseif($value['order_status'] == 'Cancelled'){?>

				    					<td><p class='badge badge-danger'>Cancelled</p></td>
				    					<td></td>

				    					<?php
				    					}elseif($orderdue < date('j M Y')){?>

				    					<td><p class='badge badge-warning'>Late</p></td>
                       					<td><a href="submitorder.php?orderid=<?php echo $value['order_id'];?>&sellerid=<?php echo $value['order_sellerid'];?>&buyerid=<?php echo $value['order_buyerid']; ?>" class='btn btn-sm btn-primary'>Submit Order</a></td>

				    					<?php
				    					}}
				    					?>
				    						
				    				
				    					
				    				</tr>

				    				

				    				
				    				
				    			</tbody>
				    		</table>
				    	</div>
				    </div>

				   

		<!-- Footer section-->

		<?php
		include_once 'footer.php';
		?>

