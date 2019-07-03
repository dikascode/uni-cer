

		<!-- Menu bar -->

		<?php
			session_start();

			if ($_SESSION['usertype'] == '1') {	
		
	
			 	include_once ('header2.php');
			 }else{
				include_once('header1.php');
		}

		 ?>

		<!-- Settings section -->
		<div class="container">

			<div class="row">
				<div class="col-md-3"></div>
		      	 	<div class="col-md">
		      	 		<div class="row purplebg marginbott">
							<div class="col-md">
								<h3 class="">Change Detials</h3>
							</div>
					</div>
		      	 		<form>
						  <div class="form-group">
						    <label >First Name</label>
						    <input type="text" class="form-control"  placeholder="First Name">
						   
						  </div>

						   <div class="form-group">
						    <label >Last Name</label>
						    <input type="text" class="form-control" placeholder="Last Name">
						   
						  </div>

						  <div class="form-group">
						    <label >Number</label>
						    <input type="Email" class="form-control" placeholder="Email">
						  </div>

						  <hr>	

						 <div class="row purplebg marginbott">
								<div class="col-md">
									<h3 class="">Change Security Settings</h3>
								</div>
						</div>
						   	<div class="form-group">
						    <label >Current Password</label>
						    <input type="text" class="form-control"  placeholder="Current Password">
						   
						  </div>

						   <div class="form-group">
						    <label >New Password</label>
						    <input type="text" class="form-control" placeholder="New Password">
						   
						  </div>

						  <div class="form-group">
						    <label >Confirm New Password</label>
						    <input type="Email" class="form-control" placeholder="Confirm New Password">
						  </div>

						 
						  <div class="form-group row">
						  	
						    <div class="col-md">
						      <button type="submit" class="btn purplebg" style="float: right;">Save</button>
						      <div style="clear: right"></div>
						    </div>
						  </div>

						</form>	
					</div>

					<div class="col-md-3"></div>
				</div>
		</div>

		<!-- Footer section-->

		<?php
		include 'footer.php';
		?>
