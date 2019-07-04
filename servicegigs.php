<?php
	session_start();

	
			if (!isset($_SESSION['userid'])) {	
		
	
			 	include_once ('header1.php');
			 }else{
				if ($_SESSION['usertype'] == '1') {
						include_once('header2.php');
					 }else{

					 	include_once('buyer_header.php');
					 }
			 }
	//instatiate class

	$gigobj = new Gigs;
	//$language = $gigobj->getLanguage();

	$gigs = $gigobj->getServiceDev($_GET['id']);

			// echo "<pre>";
			// print_r($gigs);
			// echo "</pre>";
			// exit;

?>


		<!-- result section -->

		<div class="row">
			<div class="col-md">
				<?php if(count($gigs)== 0) {
					echo "<p class='text-danger'>Oops, we are so sorry, there is no registered gig in this category, yet.</p>";
				}else{ ?>
				<div class="row">
					<div class="col-md">
						<h1><?php if (isset($gigs[0]['service_name'])) {
							echo $gigs[0]['service_name'];
						}  ?></h1>
					</div>
				</div>
			
				<div class="row">
					<div class="col-md"><hr></div>
				</div>
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

			<?php


			foreach ($gigs as $key => $value) {
					$gigimage = $value['gig_headerpic'];
					$gigtitle = $value['gig_title'];
					$gig_basicprice = $value['basic_price'];
					$username = $value['user_username'];
					$serviceid = $value['gig_serviceid'];
					//$uni = $value['abbreviation']
			?>

					 	<div class="col-md-3 d-flex justifyForMe">
						
						<div class="gigBox">
							<div style="width:230px; height:150px; background-color: black;">
							<img class="img-fluid" style="height: 150px; width: 230px; " src="<?php if (isset($gigimage)) {
								 echo $gigimage;
							} ?>">
							</div>
						<p style="padding:5px; height: 20px;">	<a href="userpublicmode.php?id=<?php echo $value['gig_userid'];  ?>"><?php if (isset($username)) {
								 echo $username;
							} ?></a><span class="badge badge-primary" style="float: right;"><?php echo $value['abbreviation']; ?></span><span style="clear: right;"></span></p>

						<p style="padding:5px; height: 50px;">	<a href="gig_publicview.php?gigid=<?php if(isset($value['gig_id'])){ echo $value['gig_id']; }?>&sellerid=<?php if(isset($value['gig_userid'])){echo $value['gig_userid']; } ?>"><?php if (isset($gigtitle)) {
								 echo $gigtitle;
							} ?></a></p>
						<p style="margin-left:40%">	<a  href="#">For just <b class="badge badge-info">&#8358;<?php if (isset($gig_basicprice)) {
								 echo $gig_basicprice;
							} ?></b></a></p>
							
						</div>
						</div>


					 <?php } ?>

					

			</div>
		
		<!-- see displayDevGig.php -->

		
	<!-- <script type="text/javascript">
		
	//dispaly Dev8 once this page load using $.get method
			$.get("displayDevGig.php", function(data){

				document.getElementById('devgig').innerHTML = data;
			});

			//display 12 dev gigs once you change the value of  language drop down box


	$('#language').change(function(){


			//get language value

			var language = $('#language').val();

			//send the parameters to displaydevpro.php using $.ajax method


			$.ajax({

				type: "POST",
				url: "displayDevGig.php",
				data: "language=" + language,
				success: function(response){

					document.getElementById('searchgig').innerHTML =response;

				}

			});


	});
	</script> -->

		<!-- Footer section-->

		<?php
	}
		include 'footer.php';
		?>




