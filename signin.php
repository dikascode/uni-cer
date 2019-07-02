<?php 
	session_start();
	include_once ('header1.php');

	//creating array for error msg

	$sign_err = array();


	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$email = User::dataSanitize($_REQUEST['emailaddress']);
		$pwd = User::dataSanitize($_REQUEST['password']);


		//signin form validation

		if(empty($email)){

			$sign_err['email'] = "<span class='text-danger'>Email field required</span>";
		}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){

			$sign_err['email'] =  "<span class='text-danger'>Invalid Email Address!</span>";
		}

		if (empty($pwd)) {
			
			$sign_err['password'] = "<span class='text-danger'>Email field required</span>";
		}elseif (strlen($pwd) < 6) {
			$sign_err['password'] = "<span class='text-danger'>Your Password is less than the minimum of 6 characters</span>";
		}

		//check if there is no validation error

		if (count($sign_err) == 0) {
			 
			 //instatiate user class and reference login method

			$userobj = new User;
			$output = $userobj->login($email, $pwd);
		}

	}


?>



<div class="row" style="margin-bottom: 7%; margin-top: 7%">
	<div class="col-md-4"></div>

	<!-- Form Section -->
	<div class="col-md-4 boxshadow" style="border: solid 1px #4B0082;">

		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<div class="row">
			<div class="col-md purplebg">
				<h3>SIGN IN</h3>

				<?php if (isset($output)) {
					echo $output;
				} ?>
			</div>
		</div>
		<div class="row form-group">
				<div class="col-md">
					<div class="row">
						<div class="col-md"><label class="purpletext">Email Address</label></div>
					</div>
					<div class="row">
						<div class="col-md"><input class="form-control" type="text" name="emailaddress" placeholder="Enter Address" value="<?php if(isset($_POST['emailaddress'])){
							echo $_POST['emailaddress'];} ?>">
						</div>
					</div>
					<!-- echo error msg -->

						<?php if (isset($sign_err['email'])) {	
						 echo $sign_err['email'];  
						}?>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md">
					<div class="row">
						<div class="col-md"><label class="purpletext">Password</label></div>
					</div>
					<div class="row">
						<div class="col-md"><input class="form-control" type="password" name="password" placeholder="Enter Password" value="">
						</div>
					</div>
					<!-- echo error msg -->
					<?php if (isset($sign_err['password'])) {	
						 echo $sign_err['password'];  
						}?>
				</div>
			</div>

				<div class="row form-group">
				<div class="col-md">
					<div class="row">
						<div class="col-md"><input class="btn join-button" type="submit" name="submit" value="Sign In" /></div>
					</div>
					
			</div>
		</div>

		</form>
	</div>

	<!-- Form Section ends -->

	<div class="col-md-4"></div>
</div>




	<!-- Modal -->
<!-- <div class="modal fade" id="accessModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="accessModalTitle" style="margin-left: 35%">Join Unilancer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> -->

      	<!-- modal form -->
        <!-- <form method="post" action="<?php // echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        	<div class="row marginbott">
        		<div class="col-md">
        			<button type="button" class="btn btn-primary btn-lg btn-block">Continue with Facebook</button>
        		</div>
        	</div>

        	<div class="row marginbott">
        		<div class="col-md">
        			<button type="button" class="btn btn-outline-danger btn-lg btn-block">Continue with Google</button>
        		</div>
        	</div>

        	<hr>
        	<div class="form-row marginbott">
        		<div class="col-md">
        			<input id="index_modal_email" class="form-control" type="text" name="modal_email" placeholder="Enter your email"><span id="err_msg"></span>
        			<?php //if(isset($err_signup)){ echo $err_signup;}  ?>
        		</div>

        	</div>

        	<div class="row marginbott">
        		<div class="col-md">
        			<input id="index_modal_button" name="modal_submit" value="Continue" type="submit" class="btn purplebg btn-lg btn-block" style="color: white;">
        			 <p style="color:black">By joining I agree to receive emails from Unilancer.</p>
        		</div>
        	</div>

        </form>
      </div>
      <div class="modal-footer"> -->
      
       
    <!--    <p style="color:grey">Already a member? <a href="signin.php" class="sigin_link"  style="color: #4B0082">Sign In</a></p>
      </div>
    </div>
  </div>
</div> -->





<?php include_once('footer.php'); ?>