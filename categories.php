<?php
	session_start();
	include_once 'header1.php';

	$catobj = new Gigs;

	$category = getCategories();

?>


		
		

<div class="container-fluid">
	<div class="row">
		<div class="col-md">Programing & Tech</div>
	</div>

	<div class="row">
		<?php foreach ($category as $key => $value) {$gigimage = $value['gig_headerpic'];
						$gigtitle = $value['gig_title'];
						$gig_basicprice = $value['basic_price'];
			
		 ?>
		<div class="col-md">
			
						
	

					 	<div class="col-md d-flex justifyForMe">
						<div class="gigBox">
							<div style="width:300px; height:250px; background-color: black;">
							<img class="img-fluid" src="<?php if (isset($gigimage)) {
								 echo $gigimage;
							} ?>">
						</div>
						<p style="padding:5px; height: 50px;">	<a href=""><?php if (isset($gigtitle)) {
								 echo $gigtitle;
							} ?></a></p>
		</div>

		<?php } ?>
	</div>
</div>


	<!-- Footer section-->

<?php
	include_once 'footer.php';
?>