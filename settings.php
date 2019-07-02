

		<!-- Menu bar -->

		<?php
			session_start();

			include_once  ('header2.php');
		 ?>

		<!-- Settings section -->

		<div class="row">

			<!-- List group here -->
			 <div class="col-4">
			    <div class="list-group" id="list-tab" role="tablist">
			      <a class="list-group-item active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home" style="">Account</a>
			      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Security</a>
			      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Notification</a>
			      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Billing</a>
			 </div>
			</div>

			<!-- Content section for list group -->
			<div class="col-7 myMinHeight" style="min-height: 700px; box-shadow: 1px 1px 5px grey; margin-left: 2%; margin-bottom: 2%; padding: 1%">
		    <div class="tab-content" id="nav-tabContent">
		      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
		      	
		      	 <div class="row ">
		      	 	<div class="col-md">
		      	 	<div class="row">
		      	 	<div class="col-md">Need to update your public profile? Go to <a href="#">My Profile</a><hr></div>
		      	 	</div>

		      	 	
		      	 	<div class="row">
		      	 		<div class="col-md">
		      	 			<form>
						  <div class="form-group">
						    <label >Full Name</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name">
						    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						  </div>
						  <div class="form-group">
						    <label >Email</label>
						    <input type="Email" class="form-control" id="exampleInputPassword1" placeholder="Email">
						  </div>

						  <div class="form-group">

						  	<label >Online Status</label>
						  
								<div class="btn-group">
								  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: 1px grey solid;">
								    Go Offline For
								  </button>
								  <div class="dropdown-menu">
								    <a class="dropdown-item" href="#">1 Hour</a>
								    <a class="dropdown-item" href="#">1 Week</a>
								    <a class="dropdown-item" href="#">1 Month</a>
								    <a class="dropdown-item" href="#">1 Year</a>
								    <a class="dropdown-item" href="#">Forever</a>
								  </div>
								</div>
						  </div>
						  
						  <button type="submit" class="btn purplebg">Save Changes</button>
						</form> <hr>
		      	 		</div>
		      	 	</div>

		      	 	<div class="row">
		      	 		<div class="col-md-4"><h4>Account Deactivation</h4></div>
		      	 		<form>
		      	 		<div class="col-md">
		      	 			<div class="form-group">

						  	<label >I'm leaving because...</label>
						  
								<div class="btn-group">
								  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: 1px grey solid;">
								    Select a reason..
								  </button>
								  <div class="dropdown-menu">
								    <a class="dropdown-item" href="#">I'm not selling enough on Unilancer</a>
								    <a class="dropdown-item" href="#">I need to concentrate on studies</a>
								    <a class="dropdown-item" href="#">Orders are overwhelming</a>
								    <a class="dropdown-item" href="#">Negative experience with buyers</a>
								    <!-- <a class="dropdown-item" href="#">Negative experience with sellers</a> -->
								  </div>
								</div>
								<button type="submit" class="btn purplebg" disabled="">Deactivate Account</button>
						  </div>

		      	 		</div>
		      	 		</form>
		      	 	</div>
		      	 </div>
		      	 </div>
		      </div>

		      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">

		      	<div class="row">
		      		<div class="col-md">
		      			<form>
		      			<div class="form-group row">
						  	<div class="col-md">
						  		<h5>Change Password</h5>
						  	</div>
						    
						 </div>	

						  <div class="form-group row">
						    <label for="inputEmail3" class="col-md-4 col-form-label">Current Password</label>
						    <div class="col-md-8">
						      <input type="password" class="form-control" id="inputEmail3" placeholder="Current Password">
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="inputPassword3" class="col-md-4 col-form-label">New Password</label>
						    <div class="col-md-8">
						      <input type="password" class="form-control" id="inputPassword3" placeholder="New Password">
						    </div>
						  </div>

						  <div class="form-group row">
						    <label for="inputPassword3" class="col-md-4 col-form-label">Confirm Password</label>
						    <div class="col-md-8">
						      <input type="password" class="form-control"  placeholder="Confirm Password">
						    </div>
						  </div>

						  <div class="form-group row">
						  	<div class="col-md-4"></div>
						  	<div class="col-md-8">
						  	<small>  
								8 characters or longer. Combine upper and lowercase letters and numbers.
							</small>
							</div>
						  </div>
						 
						  <div class="form-group row">
						  	<div class="col-md-10"></div>
						    <div class="col-md-2">
						      <button type="submit" class="btn purplebg" style="float: right;">Sign in</button>
						      <div style="clear: right"></div>
						    </div>
						  </div>

						</form>
						  
					
					<hr>
		      		</div>
		      	</div>

		      	<div class=" form-group row">
		      		<div class="col-md-4">
		      			<h5>Phone Verification</h5>	
		      		</div>
		      		 <div class="col-md-6">
						<p>Edit to verify your Phone Number</p>
					</div>

					<div class="col-md-2">
						<button type="submit" class="btn purplebg" style="float: right;">Edit</button>
						<div style="clear: right"></div>
					</div>
		      	</div>

		      	<div class=" form-group row">
		      		<div class="col-md-4">
		      			<h5>Security Question</h5>	
		      		</div>
		      		 <div class="col-md-6">
						<p>Create security question for additional security to your earnings</p>
					</div>

					<div class="col-md-2">
						<button type="submit" class="btn purplebg" style="float: right;">Edit</button>
						<div style="clear: right"></div>
					</div>
		      	</div>

		      </div>
		      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
		      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
		    </div>
		  </div>
		</div>


		
		
		
		

		
	

		<!-- Footer section-->

		<?php
		include 'footer.php';
		?>
