<?php
	
	include_once('header1.php');

	//instatiate class

	$gigobj = new Gigs;
	$language = $gigobj->getLanguage();
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
		

			<div class="row" id="devgig">				

					

			</div>
		

		
	

		<!-- Footer section-->

		<?php
		include 'footer.php';
		?>


