<?php
	
	include_once('header1.php');

	//instatiate class

	$gigobj = new Gigs;
	// $language = $gigobj->getLanguage();
	$category = $gigobj->getCategories();

	// $subcategory = $gigobj->getSubCategories();
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
		

			<div class="row" id="searchgig">
			<!-- from displaysearchGig.php -->			

					

			</div>
		

		
	
<!-- <script type="text/javascript">

	$.get("displaysearchGig.php", function(data){


				document.getElementById('devgig').innerHTML = data;
			});

	
	$('#category').change(function(){


			//get category value

			var category = $('#category').val();

			//get subcategory value

			var subcategory = $('#subcategory').val();

			//send the parameters to displaydevpro.php using $.ajax method


			$.ajax({


				type: "POST",
				url: "displaysearchGig.php",
				data: "category=" + category + "&subcategory=" + subcategory,
				success: function(response){

					document.getElementById('devgig').innerHTML =response;

					////see output at displaysearchgig.php

				}


			});

	});
</script> -->
		<!-- Footer section-->

		<?php
		include 'footer.php';
		?>


