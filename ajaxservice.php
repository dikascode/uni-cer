<?php

	include_once('header2.php');

	$obj = new Gigs;

	$subcategory = $obj->getSubCategories($_POST['marketid']);
	
	foreach ($subcategory as $key => $value) {
						 			
		$subcategoryid = $value['service_id'];
		$subcategoryname = $value['service_name'];
						 		
		?>

		<option <?php if(isset($_REQUEST['subcategoryid']) && $_REQUEST['subcategoryid'] == $subcategoryid  ){ echo "value='$subcategoryid' selected";
		 }else{echo "value='$subcategoryid'";}?> > <?php echo $subcategoryname; ?> </option>

		<?php
		}

		include_once('footer.php');
		?>

