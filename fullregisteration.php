



	<?php

	include_once 'header1.php';

	$reg_err = array();
	

	// $dbobj = new DatabaseConnect;

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
		$email = User::dataSanitize($_REQUEST['email']);
		$firstname = User::dataSanitize($_REQUEST['fname']);
		$lastname = User::dataSanitize($_REQUEST['lname']);
		$pwd = User::dataSanitize($_REQUEST['reg_pwd']);
		$username = User::dataSanitize($_REQUEST['username']);
		$phone = User::dataSanitize($_REQUEST['p_num']);
		$state = User::dataSanitize($_REQUEST['stateid']);
		$country = User::dataSanitize($_REQUEST['countryid']);
		$university = User::dataSanitize($_REQUEST['unid']);
		$course = User::dataSanitize($_REQUEST['courseid']);
		$level = User::dataSanitize($_REQUEST['levelid']);
		$gender = User::dataSanitize($_REQUEST['gender']);
		$activity = User::dataSanitize($_REQUEST['activity']); 

		// $activity is same as usertype


	

		//name serverside validation

		if (empty($email)) {
			
			$reg_err['email'] = "<span class='text-danger'>Email field is required</span>";
		}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$reg_err['email'] = "<div class='text-danger'>Please enter a valid email</div>";
				}

		if (empty($firstname)) {
			
			$reg_err['fname'] = "<span class='text-danger'>First Name field is required</span>";
		}


		if (empty($lastname)) {
			
			$reg_err['lname'] = "<span class='text-danger'>Last Name field is required</span>";
		}

		//password, username and phone number validation

		if (empty($username)) {
			
			$reg_err['username'] = "<span class='text-danger'>Username field is required</span>";
		}


		if (empty($pwd)) {
			
			$reg_err['password'] = "<span class='text-danger'>Password field is required</span>";
		}elseif (strlen($pwd) < 6) {
			$reg_err['password'] = "<span class='text-danger'>Your Password is less than the minimum of 6 characters</span>";
		}

		if (empty($phone)) {
			
			$reg_err['phone'] = "<span class='text-danger'>Phone Number field is required</span>";
		}

		// if (empty($state)) {
			
		// 	$reg_err['state'] = "<span class='text-danger'>State field is required</span>";
		// }

		// if (empty($country)) {
			
		// 	$reg_err['country'] = "<span class='text-danger'>Country field is required</span>";
		// }

		if (empty($university)) {
			
			$reg_err['unid'] = "<span class='text-danger'>University field is required</span>";
		}

		if (empty($course)) {
			
			$reg_err['course'] = "<span class='text-danger'>Course field is required</span>";
		}

		if (empty($level)) {
			
			$reg_err['level'] = "<span class='text-danger'>Level field is required</span>";
		}

		if (empty($activity)) {
			$reg_err['activity'] = "<span class='text-danger'>This field is required</span>";
		}

		if (empty($gender)) {
			$reg_err['gender'] = "<span class='text-danger'>Gender field is required</span>";
		}


		


		if (count($reg_err) == 0) {
					
					//create object of user class and reference signup method

					$signupobj= new User;

					 // var_dump(user::$userid);
					 // exit;

					if ($activity == '1') {
						$signupobj->signUp($email, $firstname, $lastname, $username, $pwd, $phone, $state, $country, $course, $university, $level, $gender, $activity);
					}else{

					$signupobj->signUp($email, $firstname, $lastname, $username, $pwd, $phone, $state, $country, '', '', '', $gender, $activity);
					}
				}
			
	}

	?>
	
		

		<!-- second menu bar -->
	
		
		<div id="secondmenu" class="row">
			

			<div class="col-md">
				<ul class="second-menu-list">
						<li><a href="#">Writing</a></li>
						<li><a href="#">Design</a></li>
						<li><a href="#">Programing & Tech</a></li>
						<li><a href="#">Digital Marketing</a></li>
						<li><a href="#">Video & Animation</a></li>
						<li><a href="#">Music & Audio</a></li>
						<li><a href="#">Business</a></li>
						<li><a href="#">Final Year Research</a></li>
						
				</ul>
			</div>

		</div>

		<?php

						//instatiate class user

					$userobject = new User;
					$state = $userobject->getStates();

					$university = $userobject->getUniversities();

					$course = $userobject->getCourses();

					$level = $userobject->getLevel();

					$country = $userobject->getCountries();

					$usertype = $userobject->getUserType();
					// echo "<pre>";
					// 	 		print_r($state);
					// 	 		echo "</pre>";
						 	


					?>

		<!-- Form section -->

		

		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>">

		<div id="regForm" class="row">
			<div class="col-md">
				<div class="row purplebg marginbott">
					<div class="col-md">
						<h3 class="">Choose Activity on Unilancer</h3>
					</div>
				</div>

					<!-- select button to choose activity on freelancer -->
					<div class="row marginbott">
					<div  class="col-md-3">
						<select id="activity" name="activity" class="custom-select">
						  <option value="">Activity</option>
						  <?php

						 	foreach ($usertype as $key => $value) {
						 			
						 			$usertypeid = $value['roleid'];
						 			$usertypename = $value['type_title'];
						 		
						 ?>

						 <option <?php if(isset($_REQUEST['activity']) && $_REQUEST['activity'] == $usertypeid ){ echo "value='$usertypeid' selected";
						  }else{echo "value='$usertypeid'";}?> > <?php echo $usertypename; ?> </option>

						 <?php
						 }
						 ?>
						</select>
						<span id="err_text6"><?php if (isset($reg_err['activity'])){echo $reg_err['activity'];}?></span>
					</div>
				</div>

			

				<div class="row form-group">
				<div id="reg_info" class="col-md" >

				<div class="row purplebg marginbott">
					<div class="col-md">
						<h3 class="">Personal Information</h3>
					</div>
				</div>

				<!-- email section -->

				<div class="row form-group">
					<div class="col-md marginbott">
						 <input id="email" type="text" class="form-control" name="email" placeholder="Enter Email" value="<?php if(isset($_REQUEST['email'])){ echo $_REQUEST['email'];} ?>">
						 <span id="err_text1"><?php if (isset($reg_err['email'])){echo $reg_err['email'];}?></span>
					</div>


					<!-- gender section -->

					<div class="col-md">
						<select id="gender" class="custom-select" name="gender">
						  <option value="">Gender</option>
						  <option <?php if(isset($_REQUEST['gender']) && $_REQUEST['gender'] == 'Female' ){ echo "value='Female' selected";
						  }else{echo "value='Female'";}?> >Female</option>
						  <option <?php if(isset($_REQUEST['gender']) && $_REQUEST['gender'] == 'Male' ){ echo "value='Male' selected";
						  }else{echo "value='Male'";}?> >Male</option>
						 </select>

						 <span id="err_text9"><?php if (isset($reg_err['gender'])){echo $reg_err['gender'];}?></span>
					</div>

					<!-- <div class="col-md"></div> -->

				</div>

				<div class="row form-group">
					<div class="col-md marginbott">
						 <input id="fname" type="text" class="form-control" name="fname" placeholder="First Name" value="<?php if(isset($_REQUEST['fname'])){ echo $_REQUEST['fname'];} ?>">
						 <span id="err_text1"><?php if (isset($reg_err['fname'])){echo $reg_err['fname'];}?></span>
					</div>

					<div class="col-md marginbott">
						 <input type="text" class="form-control" name="lname" placeholder="Last Name" value="<?php if(isset($_REQUEST['lname'])){ echo $_REQUEST['lname'];} ?>">
						 <span id="err_text2"><?php if (isset($reg_err['lname'])){echo $reg_err['lname'];}?></span>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md marginbott">
						 <input type="text" class="form-control" name="username" placeholder="Choose Username" value="<?php if(isset($_REQUEST['username'])){ echo $_REQUEST['username'];} ?>">
						 <span id="err_text3"><?php if (isset($reg_err['username'])){echo $reg_err['username'];}?></span>
					</div>

					<div class="col-md marginbott">
						 <input type="password" class="form-control" name="reg_pwd" placeholder="Choose Password">
						 <span id="err_pwd"><?php if (isset($reg_err['password'])){echo $reg_err['password'];}?></span>
					</div>
				</div>


				<div class="row form-group">
					<div class="col-md marginbott">
						 <input type="text" class="form-control" placeholder="Phone Number" name="p_num" value="<?php if(isset($_REQUEST['p_num'])){ echo $_REQUEST['p_num'];} ?>">
						 <span id="err_text4"><?php if (isset($reg_err['phone'])){echo $reg_err['phone'];}?></span>
					</div>

					<!-- Select state section -->

					<div  class="col-md marginbott">
						 <select id="state" name="stateid" class="custom-select">
						  <option value="">State</option>
						 <?php

						 	foreach ($state as $key => $value) {
						 			
						 			$stateid = $value['stateid'];
						 			$statename = $value['state_name'];
						 		
						 ?>

						 <option <?php if(isset($_REQUEST['stateid']) && $_REQUEST['stateid'] == $stateid ){ echo "value='$stateid' selected";
						  }else{echo "value='$stateid'";}?> > <?php echo $statename; ?></option>

						 <?php
						 }
						 ?>
						  
						</select>
						<span id="err_text5"></span>
					</div>

					<!-- country select -->


					<div  class="col-md">
						<select id="country" name="countryid" class="custom-select">
						  <option value="">Country</option>
						  <?php

						 	foreach ($country as $key => $value) {
						 			
						 			$countryid = $value['country_id'];
						 			$countryname = $value['country_name'];
						 		
						 ?>

						 <option <?php if(isset($_REQUEST['countryid']) && $_REQUEST['countryid'] == $countryid ){ echo "value='$countryid' selected";
						  }else{echo "value='$countryid'";}?> > <?php echo $countryname; ?> </option>

						 <?php
						 }
						 ?>
						</select>
						<span id="err_text6"><?php if (isset($reg_err['country'])){echo $reg_err['country'];}?></span>
					</div>


				</div>

				<div class="row">
				<div id="edu_info" class="col-md">

				<div class="row purplebg marginbott">
					<div class="col-md">
						<h3 class="">Education Information</h3>
					</div>
				</div>

				<!-- select course of study -->

				<div class="row marginbott">
					<div  class="col-md">
						<select id="course_study"class="custom-select" name="courseid">
						  <option value="course">Course of study</option>
						  <?php

						 	foreach ($course as $key => $value) {
						 			
						 			$courseid = $value['course_of_study_id'];
						 			$coursename = $value['course_name'];
						 		
						 ?>

						 <option <?php if(isset($_REQUEST['courseid']) && $_REQUEST['courseid'] == $courseid ){ echo "value='$courseid' selected";
						  }else{echo "value='$courseid'";}?> > <?php echo $coursename; ?></option>

						 <?php
						 }
						 ?>
						</select>
						<!-- error section -->
						<span id="err_text6"><?php if (isset($reg_err['course'])){echo $reg_err['course'];}?></span>
					</div>

					<!-- select university options -->

					<div  class="col-md">
						<select id="university" class="custom-select" name="unid">
						  <option value="university">University</option>
						   <?php

						 	foreach ($university as $key => $value) {
						 			
						 			$unid = $value['university_id'];
						 			$uniname = $value['name'];
						 		
						 ?>

						 <option <?php if(isset($_REQUEST['unid']) && $_REQUEST['unid'] == $unid ){ echo "value='$unid' selected";
						  }else{echo "value='$unid'";}?>> <?php echo $uniname; ?></option>

						 <?php
						 }
						 ?>
						</select>
						<span id="err_text7"><?php if (isset($reg_err['unid'])){echo $reg_err['unid'];}?></span>
					</div>
				</div>

				<!-- Select Level -->

				<div  class="row marginbott">
					<div class="col-md">
						<select id="level" class="custom-select" name="levelid">
						  <option value="level">Level</option>
						   <?php

						 	foreach ($level as $key => $value) {
						 			
						 			$levelid = $value['level_id'];
						 			$level = $value['level'];
						 		
						 ?>

						 <option <?php if(isset($_REQUEST['levelid']) && $_REQUEST['levelid'] == $levelid ){ echo "value='$levelid' selected";
						  }else{echo "value='$levelid'";}?>><?php echo $level; ?></option>

						 <?php
						 }
						 ?>
						</select>
						<span id="err_text8"><?php if (isset($reg_err['level'])){echo $reg_err['level'];}?></span>
					</div>

					<!-- empty div here -->

					



				</div>
			</div>
		</div>

				<div class="row">
					<div class="col-md">
						<button type="submit" id="reg_btn"  class="btn btn-lg btn-block join-button purple-text">Join</button>
					</div>
				</div>
			</div>
		</div>

			</div>
		</div>
	</form>

		

		<!-- Footer section-->

		<?php
		include_once ('footer.php');
		?>





