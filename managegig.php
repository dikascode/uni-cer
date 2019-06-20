

		<!-- Header/Menu baR -->


		<?php

			include_once 'header2.php';

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
						<ul class="gig-list">
							<li><a class="" data-toggle="collapse" href="#collapseActive" role="button" aria-expanded="false" aria-controls="collapseActive">Active <span class="badge purplebg">3</span></a></li>

							<li><a class="" data-toggle="collapse" href="#collapsePending" role="button" aria-expanded="false" aria-controls="collapsePending">Pending Approval <span class="badge purplebg">3</span></a></li>

							<li><a class="" data-toggle="collapse" href="#collapseModify" role="button" aria-expanded="false" aria-controls="collapseModify">Needs Some Modification <span class="badge purplebg">3</span></a></li>

							<li><a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Denied <span class="badge purplebg">3</span></a></li>

							<li><a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Paused <span class="badge purplebg">3</span></a></li>
							
						</ul>
					</div>

					<div class="col-md-2">
						<button class="btn btn-sm join-button" style="">Create a New Gig <i class="fas fa-plus"></i></button>
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
				    					<td><input type="checkbox" name=""></td>
				    					<td><img src="" width="70px" height="50px" style="margin-right: 1%;"><a href="#">I will build your website with php</a></td>
				    					<td>2.9k</td>
				    					<td>200</td>
				    					<td>40</td>
				    					<td>5</td>
				    					<td>80%</td>
				    					<td>1</td>
				    					<td>
				    						<div class="col-md-2"><button class="btn btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>

				    							<div class="dropdown-menu">
												    <a class="dropdown-item" href="#">EDIT</a>
												    <a class="dropdown-item" href="#">PAUSE</a>
												    <a class="dropdown-item" href="#">SHARE</a>
												    <a class="dropdown-item" href="#">DELETE</a>
												</div>
				    					</td>
				    				</tr>

				    				<tr>
				    					<td><input type="checkbox" name=""></td>
				    					<td><img src="" width="70px" height="50px" style="margin-right: 1%;"><a href="#">I will build your website with php</a></td>
				    					<td>2.9k</td>
				    					<td>200</td>
				    					<td>40</td>
				    					<td>5</td>
				    					<td>80%</td>
				    					<td>1</td>
				    					<td>
				    						<div class="col-md-2"><button class="btn btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>

				    							<div class="dropdown-menu">
												    <a class="dropdown-item" href="#">EDIT</a>
												    <a class="dropdown-item" href="#">PAUSE</a>
												    <a class="dropdown-item" href="#">SHARE</a>
												    <a class="dropdown-item" href="#">DELETE</a>
												</div>
				    					</td>
				    				</tr>

				    				<tr>
				    					<td><input type="checkbox" name=""></td>
				    					<td><img src="" width="70px" height="50px" style="margin-right: 1%;"><a href="#">I will build your website with php</a></td>
				    					<td>2.9k</td>
				    					<td>200</td>
				    					<td>40</td>
				    					<td>5</td>
				    					<td>80%</td>
				    					<td>1</td>
				    					<td>
				    						<div class="col-md-2"><button class="btn btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>

				    							<div class="dropdown-menu">
												    <a class="dropdown-item" href="#">EDIT</a>
												    <a class="dropdown-item" href="#">PAUSE</a>
												    <a class="dropdown-item" href="#">SHARE</a>
												    <a class="dropdown-item" href="#">DELETE</a>
												</div>
				    					</td>
				    				</tr>

				    				<tr>
				    					<td><input type="checkbox" name=""></td>
				    					<td><img src="" width="70px" height="50px" style="margin-right: 1%;"><a href="#">I will build your website with php</a></td>
				    					<td>2.9k</td>
				    					<td>200</td>
				    					<td>40</td>
				    					<td>5</td>
				    					<td>80%</td>
				    					<td>1</td>
				    					<td>
				    						<div class="col-md-2"><button class="btn btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>

				    							<div class="dropdown-menu">
												    <a class="dropdown-item" href="#">EDIT</a>
												    <a class="dropdown-item" href="#">PAUSE</a>
												    <a class="dropdown-item" href="#">SHARE</a>
												    <a class="dropdown-item" href="#">DELETE</a>
												</div>
				    					</td>
				    				</tr>
				    				
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
	<div class="row">
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

	<!-- Modification Collapse -->

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
	</div>


		
		
		
		

		
	

		<!-- Footer section-->

		<?php
		include 'footer.php';
		?>



	</div>


	<!-- External javacript -->
	

	<!-- jQuery -->
	<script type="text/javascript" src="bootstrap/js/jquery-3.3.1.js"></script>
	
	<!-- Popper -->
	<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
	
	<!-- Bootstrap Js -->
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/unilancer.js"></script>




</body>
</html>