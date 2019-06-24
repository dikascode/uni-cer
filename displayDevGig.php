<?php

	include_once('uni_Class.php');

	$gigobj = new Gigs;

	if (isset($_POST['language'])) {
		$gigs = $gigobj->getFeaturedDev12($_POST['language']);
	}else{

		$gigs = $gigobj->getDev8();
	}

	



			foreach ($gigs as $key => $value) {
						$gigimage = $value['gig_headerpic'];
						$gigtitle = $value['gig_title'];
						$gig_basicprice = $value['basic_price'];
						$username = $value['user_username'];
						$serviceid = $value['gig_serviceid']
					 ?>

					 	<div class="col-md d-flex justifyForMe">
						
						<div class="gigBox">
							<div style="width:230px; height:150px; background-color: black;">
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
						<p style="margin-left:40%">	<a  href="#">For just <b class="badge badge-info">&#8358;<?php if (isset($gig_basicprice)) {
								 echo $gig_basicprice;
							} ?></b></a></p>
							
						</div>
						</div>


					 <?php } ?>
