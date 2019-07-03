

		<!-- Menu bar -->

		<?php
			session_start();

			if ($_SESSION['usertype'] == '1') {	
		
	
			 	include_once ('header2.php');
			 }else{
				include_once('header1.php');
		}



		if ($_SERVER['REQUEST_METHOD'] == 'POST'){

		$fname = dataSanitize($_REQUEST['firstname']);

		$lname = dataSanitize($_REQUEST['lastname']);

		$lname = dataSanitize($_REQUEST['lastname']);
		

		//check if there is no validation error

		if ($regerror== 0) {

			//create object of user class and reference register() method

			$regobj = new User;

			$regobj->updateUser($lname, $fname, $email, $gender, $biography, $dateofbirth, $role, $userid);
		}

		


	}




		$userobj = class User;
		$userobj->updateSettings();

		$password = md5($password);

		 ?>

		<!-- Settings section -->
		<div class="container">

			<div class="row">
				<div class="col-md-3"></div>
		      	 	<div class="col-md">
		      	 		<div class="row purplebg marginbott">
							<div class="col-md">
								<h3 class="">Change Details</h3>
							</div>
					</div>
		      	 		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>">
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
