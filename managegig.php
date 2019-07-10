

		<!-- Header/Menu baR -->


		<?php
			session_start();
			if ($_SESSION['usertype'] == '1') {
				include_once('header2.php');
			}else{

			header("Location: http://localhost/6thprojectphp/signin.php");
			}



			//creating the object of the class that recalls all gigs from database

			$gigobj = new Gigs;

			$gigs = $gigobj->getGigs($_SESSION['userid']);

			// var_dump($gigs);

		?>

		<!-- Gig manager section -->

		<div class="row">
			<div class="col-md">
				<div class="row">
					<div class="col-md">
						<h3>GIGS</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10">
						<!-- <ul class="gig-list">
							<li><a class="" data-toggle="collapse" href="#collapseActive" role="button" aria-expanded="false" aria-controls="collapseActive">Active <span class="badge purplebg">3</span></a></li>

							<li><a class="" data-toggle="collapse" href="#collapsePending" role="button" aria-expanded="false" aria-controls="collapsePending">Pending Approval <span class="badge purplebg">3</span></a></li>

							<li><a class="" data-toggle="collapse" href="#collapseModify" role="button" aria-expanded="false" aria-controls="collapseModify">Needs Some Modification <span class="badge purplebg">3</span></a></li>

							<li><a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Denied <span class="badge purplebg">3</span></a></li>

							<li><a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Paused <span class="badge purplebg">3</span></a></li> -->
							
						</ul>
					</div>

					<div class="col-md-2">
						<a href="gig-setup-form.php?id=<?php echo $_SESSION['userid'] ?>&name=<?php echo $_SESSION['username'] ?>" class="btn btn-sm join-button" style="">Create a New Gig <i class="fas fa-plus"></i></a>
					</div>
				</div>

				<div class="row">
					<div class="col-md"><hr></div>
				</div>
			</div>
		</div>

		<!-- Collapse for Active gig sub-menu here -->

		<div class="row" style="margin-bottom: 10px;">
			<div class="col-md table-responsive">
				<div class="collapse show active" id="collapseActive">
				  <div class="card card-body" >
				    <div class="row">
				    	<div class="col-md-6"><p>ACTIVE GIGS</p></div>
				    	<!-- <div class="col-md-4"><button class="btn btn-sm purplebg">DELETE</button></div>
				    	<div class="col-md-2"><button class="btn btn-sm purplebg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 Days</button>
				    		<div class="dropdown-menu">
							    <a href="#">Last 30 Days</a>
							    <a href="#">Last 1 Month</a>
							    <a href="#">Last 3 Months</a>
							    <div class="dropdown-divider"></div>
							    <a class="dropdown-item" href="#">Last 6 Months</a>
							</div>
				    	</div> -->
				    </div>
				    <div class="row">
				    	<div class="col-md">
				    		<table class="table table-bordered table-hover">
				    			<thead class="thead-dark">
				    				<th><input type="checkbox" name=""></th>
				    				<th>GIG</th>
				    				
				    				<th>CLICKS</th>
				    				
				    				<th>ORDERS</th>
				    				
				    				<th>CANCELLATIONS</th>
				    				<th></th>
				    			</thead>

				    			<tbody>


				    				<?php foreach ($gigs as $key => $value) {
										$gigimage = $value['gig_headerpic'];
										$gigtitle = $value['gig_title'];
										$gig_basicprice = $value['basic_price'];
										$_SESSION['signature'] = $value['user_signature'];
										$_SESSION['user_desc'] = $value['user_desc'];

										// var_dump($_SESSION['signature'] );
									 ?>

				    				<tr>
				    					<td><!-- <input type="checkbox" name=""> --></td>
				    					<td><img class="img-fluid" src="<?php echo $gigimage; ?>" width="70px" height="50px" style="margin-right: 1%; background-color: grey;" alt='<?php echo $value['user_username']; ?>'><a href="gig_publicview.php?gigid=<?php if(isset($value['gig_id'])){ echo $value['gig_id']; }?>&sellerid=<?php if(isset($value['gig_userid'])){echo $value['gig_userid']; } ?>"><?php echo $gigtitle; ?></a></td>
				    			
				    					<td><!-- number of clicks here --></td>
				    					
				    					<td><!-- number of orders here --></td>
				    					
				    					<td><!-- number of cancellations --></td>
				    					<td>
				    						<a class="" href="gig-edit-form.php?sellerid=<?php echo $value['gig_userid']; ?>&gigid=<?php echo $value['gig_id']; ?>">EDIT</a> |
										
											<a class="" href="deletegig.php?gigid=<?php echo $value['gig_id'] ?>&gigtitle=<?php echo $gigtitle; ?>">DELETE</a> 
										
				    					</td>
				    				</tr>


				    				 <?php } ?>
				    				
				    			</tbody>
				    		</table>
				    	</div>
				    </div>

				     <div class="row">
				    	<div class="col-md">
				    		<!-- p tag here to insert information for active gig -->
				    		<p></p>
				    	</div>
				    </div>

				</div>
			</div>
		</div>
	</div>

	<!-- Pending Collapse -->
	<!-- <div class="row">
			<div class="col-md table-responsive">
				<div class="collapse" id="collapsePending">
				  <div class="card card-body" >
				    <div class="row">
				    	<div class="col-md-6"><p>GIGS PENDING APPROVAL</p></div>
				    	<div class="col-md-4"><button class="btn btn-sm purplebg">DELETE</button></div>
				    	<div class="col-md-2"><button class="btn btn-sm purplebg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 Days</button>
				    		<div class="dropdown-menu">
							    <a class="dropdown-item" href="#">Last 30 Days</a>
							    <a class="dropdown-item" href="#">Last 1 Month</a>
							    <a class="dropdown-item" href="#">Last 3 Months</a>
							    <div class="dropdown-divider"></div>
							    <a class="dropdown-item" href="#">Last 6 Months</a>
							</div>
				    	</div>
				    </div>
				    <div class="row">
				    	<div class="col-md">
				    		<table class="table table-bordered table-hover">
				    			<thead class="thead-dark">
				    				<th><input type="checkbox" name=""></th>
				    				<th>GIG</th>
				    				<th>IMPRESSIONS</th>
				    				<th>CLICKS</th>
				    				<th>VIEWS</th>
				    				<th>ORDERS</th>
				    				<th>CONVERSION RATE</th>
				    				<th>CANCELLATIONS</th>
				    				<th></th>
				    			</thead>

				    			<tbody>
				    				<tr>
				    					
				    				</tr>
				    				
				    			</tbody>
				    		</table>
				    	</div>
				    </div>

				    <div class="row">
				    	<div class="col-md">
				    		<p>No pending gigs to display.</p>
				    	</div>
				    </div>
				</div>
			</div>
		</div>
	</div>

	Modification Collapse

	<div class="row">
			<div class="col-md table-responsive">
				<div class="collapse" id="collapseModify">
				  <div class="card card-body" >
				    <div class="row">
				    	<div class="col-md-6"><p>GIGS REQUIRING MODIFICATION</p></div>
				    	<div class="col-md-4"><button class="btn btn-sm purplebg">DELETE</button></div>
				    	<div class="col-md-2"><button class="btn btn-sm purplebg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 Days</button>
				    		<div class="dropdown-menu">
							    <a class="dropdown-item" href="#">Last 30 Days</a>
							    <a class="dropdown-item" href="#">Last 1 Month</a>
							    <a class="dropdown-item" href="#">Last 3 Months</a>
							    <div class="dropdown-divider"></div>
							    <a class="dropdown-item" href="#">Last 6 Months</a>
							</div>
				    	</div>
				    </div>
				    <div class="row">
				    	<div class="col-md">
				    		<table class="table table-bordered table-hover">
				    			<thead class="thead-dark">
				    				<th><input type="checkbox" name=""></th>
				    				<th>GIG</th>
				    				<th>IMPRESSIONS</th>
				    				<th>CLICKS</th>
				    				<th>VIEWS</th>
				    				<th>ORDERS</th>
				    				<th>CONVERSION RATE</th>
				    				<th>CANCELLATIONS</th>
				    				<th></th>
				    			</thead>

				    			<tbody>
				    				<tr>
				    					
				    				</tr>
				    				
				    			</tbody>
				    		</table>
				    	</div>
				    </div>

				    <div class="row">
				    	<div class="col-md">
				    		<p>No gigs needing modification to display.</p>
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


