

		<!-- Header/Menu baR -->


		<?php

			include_once 'header2.php';

		?>

		<!-- Earnings detail sections -->

		<div class="row">
			<div class="col-md">
				<h3>EARNINGS</h3>
			</div>
		</div>

		<div class="row boxshadow">
			<div class="col-md my-textAlign"><small>Net Income</small> <p>N400000</p></div>
			<div class="col-md my-textAlign"><small>Pending Clearance</small> <p>N80000</p></div>
			<div class="col-md my-textAlign"><small>Withdrawn</small> <p>N120000</p></div>
			<div class="col-md my-textAlign"><small>Used for Purchases</small> <p>N100000</p></div>
			<div class="col-md my-textAlign"><small>Available for Withdrawal</small> <p>N100000</p></div>
		</div>

		<div class="row" style="margin-top: 10px;">
			<div class="col-md-2"><h6 class="" style="padding: 5px;">WITHDRAWAL OPTION</h6></div>
			<div class="col-md-2 "><button class="btn join-button">Bank Transfer</button></div>
			<div class="col-md-2"><button class="btn join-button">Paypal Account</button></div>
		</div>

		<div class="row" style="margin-top: 10px;">
			<div class="col-md-2"><h6 class="" style="padding: 5px;">SHOW</h6></div>
			<div class="col-md-2 ">

				<div class="btn-group">
				  <button type="button" class="btn purplebg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Action
				  </button>
				  <div class="dropdown-menu">
				    <a class="dropdown-item" href="#">Everything</a>
				    <a class="dropdown-item" href="#">Withdrawn</a>
				    <a class="dropdown-item" href="#">Pending Clearance</a>
				    <a class="dropdown-item" href="#">Cancelled Revenue</a>
				    <a class="dropdown-item" href="#">Cleared</a>
				    <a class="dropdown-item" href="#">Used for Purchases</a>
				  </div>
				</div>
			</div>

			<!-- Drop down to choose what year of revenue to be shown since joining freelancer -->
			<div class="col-md-2">
				<div class="btn-group">
				  <button type="button" class="btn purplebg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    2019
				  </button>
				  <div class="dropdown-menu">
				    <a class="dropdown-item" href="#">2018</a>
				    <a class="dropdown-item" href="#">2017</a>
				    <a class="dropdown-item" href="#">2016</a>
				    <a class="dropdown-item" href="#">2015</a>
				   
				  </div>
				</div>
			</div>

			<div class="col-md-2">

					<div class="btn-group">
				  <button type="button" class="btn purplebg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    All Months
				    <!-- something is wrong here with the way the drop down appears and needs to be checked -->
				  </button>
				  <div class="dropdown-menu">
				    <a class="dropdown-item" href="#">January</a>
				    <a class="dropdown-item" href="#">February</a>
				    <a class="dropdown-item" href="#">March</a>
				    <a class="dropdown-item" href="#">April</a>
				    <a class="dropdown-item" href="#">May</a>
				    <a class="dropdown-item" href="#">June</a>
				    <a class="dropdown-item" href="#">July</a>
				    <a class="dropdown-item" href="#">August</a>
				    <a class="dropdown-item" href="#">September</a>
				    <a class="dropdown-item" href="#">October</a>
				    <a class="dropdown-item" href="#">November</a>
				    <a class="dropdown-item" href="#">December</a>
				   
				  </div>
				</div>
			</div>
		</div>

		<!-- Earnings report table -->

		<div class="row" style="margin-top: 20px;">
			<div class="col-md table-responsive">
				<table class="table table-bordered boxshadow">
				    			<thead class="thead-dark">
				    				<th>DATE</th>
				    				<th width="60%">FOR</th>
				    				<th>AMOUNT</th>
				    			</thead>

				    			<tbody>

				    				<tr>
				    					<td>Jun 20, 19</td>
				    					<td>
				    						<div class="progress" style="width: 50%; float: left; margin: 5px;">
											  <div class="progress-bar progress-bar-striped progress-bar-animated purplebg" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Clearing</div>
											</div><span>Funds Pending Clearance (<a href="">View Order</a>)</span>

				    					</td>

				    					<td class="purpletext">N80000</td>
				    					
				    					
				    				</tr>

				    				<tr>
				    					<td>Jun 1, 19</td>
				    					<td>
				    						<div class="progress" style="width: 50%; float: left; margin: 5px;">
											  <div class="progress-bar progress-bar-striped progress-bar-animated purplebg" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Cleared</div>
											</div><span>Funds Cleared (<a href="">View Order</a>)</span>

				    					</td>

				    					<td class="purpletext">N100000</td>
				    						
				    				</tr>

				    				<tr>
				    					<td colspan="6" class="my-textAlign">
				    						<a href="#" class="btn btn-sm purplebg">Load More</a>
				    					</td>
				    				</tr>	
				    				
				    			</tbody>
				    		</table>
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