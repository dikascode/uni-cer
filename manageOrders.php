
		<!-- Header/Menu baR -->


		<?php

			include_once 'header2.php';

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
							<li><a class="" data-toggle="collapse" href="#collapseNew" role="button" aria-expanded="false" aria-controls="collapseNew">New <span class="badge purplebg">2</span></a></li>

							<li><a class="" data-toggle="collapse" href="#collapseActive" role="button" aria-expanded="false" aria-controls="collapseActive">Active <span class="badge purplebg">2</span></a></li>

							<li><a class="" data-toggle="collapse" href="#collapseCompleted" role="button" aria-expanded="false" aria-controls="collapseCompleted">Completed <span class="badge purplebg">50</span></a></li>

							<li><a class="" data-toggle="collapse" href="#collapseLate" role="button" aria-expanded="false" aria-controls="collapseLate">Late <span class="badge purplebg"></span></a></li>

							<li><a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Pending Approval <span class="badge purplebg"></span></a></li>

							<li><a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Cancelled <span class="badge purplebg"></span></a></li>
							
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
				    	<div class="col-md">
				    		<!-- p tag here to insert information for active gig -->
				    		<p></p>
				    	</div>
				    </div>

				</div>
			</div>
		</div>
	</div>

	<!-- Active Order Collapse -->
	<div class="row">
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
				    	<div class="col-md">

				    		<!-- p tag for inner html here -->
				    		<p></p>
				    	</div>
				    </div>
				</div>
			</div>
		</div>
	



	<!-- Completed Orders Collapse -->
	<div class="row">
			<div class="col-md table-responsive">
				<div class="collapse" id="collapseCompleted">
				  <div class="card card-body" >
				    <div class="row">
				    	<div class="col-md-6"><p>COMPLETED ODERS</p></div>
				    	
				    </div>

				    <!-- table row -->
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
				    	<div class="col-md">

				    		<!-- p tag for inner html from jquery from php here -->
				    		
				    	</div>
				    </div>
				</div>
			</div>
		</div>
	

	<!-- Late Order Collapse -->

	<div class="row">
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