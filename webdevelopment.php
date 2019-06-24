<?php
	
	include_once('header1.php');

	//instatiate class

	$gigobj = new Gigs;
	$language = $gigobj->getLanguage();


	$gigobj = new Gigs;

	$gigs = $gigobj->getDevGigs();

?>


		<!-- result section -->

		<div class="row">
			<div class="col-md">
				<div class="row">
					<div class="col-md">
						<h1>Web Development</h1>
					</div>
				</div>
			
				<div class="row">
					<div class="col-md"><hr></div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<!-- <form> -->
							<select id="language" class="form-control marginTop" name="languageid">
							<option value="">Select a Language</option>
							<!-- generating service options from database -->
							<?php


						 	foreach ($language as $key => $value) {
						 			
						 			$languageid = $value['languageid'];
						 			$languagename = $value['language_title'];
						 		
						 ?>

						 <option <?php if(isset($_REQUEST['languageid']) && $_REQUEST['languageid'] == $subcategoryid  ){ echo "value='$languageid' selected";
						  }else{echo "value='$languageid'";}?> > <?php echo $languagename; ?> </option>

						 <?php
						 }
						 ?>

						</select>
						
					<!-- </form> -->
					</div>

					
				</div>

				<!-- <div class="row">
					<div class="col-md"></div>
				</div> -->

				<div class="row">
					<div class="col-md" ><hr></div>
				</div>
			</div>
		</div>


		<!-- section for sellers profiles -->
		

			<div class="row">				

					<?php foreach ($gigs as $key => $value) {
						$gigimage = $value['gig_headerpic'];
						$gigtitle = $value['gig_title'];
						$gig_basicprice = $value['basic_price'];
						$username = $value['user_username'];
					 ?>

					 	<div class="col-md d-flex justifyForMe">
						<div class="gigBox">
							<div style="width:230px; height:180px; background-color: black;">
							<img class="img-fluid" src="<?php if (isset($gigimage)) {
								 echo $gigimage;
							} ?>">
							</div>
						<p style="padding:5px; height: 20px;">	<a href="#"><?php if (isset($username)) {
								 echo $username;
							} ?></a></p>

						<p style="padding:5px; height: 50px;">	<a href="#"><?php if (isset($gigtitle)) {
								 echo $gigtitle;
							} ?></a></p>
							
						</div>
						</div>


					 <?php } ?>


				</div>
		

		
	

		<!-- Footer section-->

		<?php
		include 'footer.php';
		?>


