<?php
	
	include_once('header1.php');

	//instatiate class

	$gigobj = new Gigs;
	// $language = $gigobj->getLanguage();
	$category = $gigobj->getCategories();

	$subcategory = $gigobj->getSubCategories();
?>


		<!-- result section -->

		<div class="row">
			<div class="col-md">
				<div class="row">
					<div class="col-md">
						<h1>Search Results</h1>
					</div>
				</div>
			
				<div class="row">
					<div class="col-md"><hr></div>
				</div>

				<div class="row">

					<div class="col-md-3">
						<select id="category" class="form-control marginTop" name="categoryid">
							<option value="">Select a Category</option>

							<!-- generating marketplace options from database -->
							<?php


						 	foreach ($category as $key => $value) {
						 			
						 			$categoryid = $value['marketplace_id'];
						 			$categoryname = $value['marketplace_name'];
						 		
						 ?>

						 <option <?php if(isset($_REQUEST['categoryid']) && $_REQUEST['categoryid'] == $categoryid  ){ echo "value='$categoryid' selected";
						  }else{echo "value='$categoryid'";}?> > <?php echo $categoryname; ?> </option>

						 <?php
						 }
						 ?>
						</select>
						
					</div>

					<div class="col-md-3">
						<select id="subcategory" class="form-control marginTop" name="subcategoryid">
							<option value="">Select a Subcategory</option>
							<!-- generating service options from database -->
							<?php


						 	foreach ($subcategory as $key => $value) {
						 			
						 			$subcategoryid = $value['service_id'];
						 			$subcategoryname = $value['service_name'];
						 		
						 ?>

						 <option <?php if(isset($_REQUEST['subcategoryid']) && $_REQUEST['subcategoryid'] == $languageid  ){ echo "value='$subcategoryid' selected";
						  }else{echo "value='$subcategoryid'";}?> > <?php echo $subcategoryname; ?> </option>

						 <?php
						 }
						 ?>

						</select>
						
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


