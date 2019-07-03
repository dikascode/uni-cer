
		
		<?php
		// Included header from php header1
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

			$gigobj = new Gigs;
			$result = $gigobj->getMarketGigs($_GET['id']);

			$market = $marketobj->getSubCategories($_GET['id']);

			// echo "<pre>";
			// print_r($result);
			// echo "</pre>";
			// exit;



		?>

		<!-- market aith its sub services section  -->
		<div class="row">
			<div class="col-md">
				<h1><?php if (isset($result[0]['marketplace_name'])) {
							echo $result[0]['marketplace_name'];
						}  ?>
	
				</h1>
				<p>Get all your <?php if (isset($result[0]['marketplace_name'])) {
							echo $result[0]['marketplace_name'];
						}  ?> 
						jobs done by the best and most trust worthy Nigerian university students
				</p>
				<hr>
			</div>
		</div>

		<div class="row">
			<div style="border-right: 1px solid grey" class="col-md-3" id="techlist">
				
						<h5><?php if (isset($result['0']['marketplace_name'])) {
							echo $result['0']['marketplace_name'];
						}  ?></h5>

						<h6 style="color: grey;">Find gigs by services</h6>
						<ul>

							<?php foreach ($market as $key => $value) {
						
							?>
						<li><a href=""><?php echo $value['service_name']; ?></a></li>

					<!-- 	$value['service_id']; -->


					<?php }  ?>
						
						</ul>
			</div>


			<?php
			
			foreach ($result as $key => $value) {
						$gigimage = $value['gig_headerpic'];
						$gigtitle = $value['gig_title'];
						$gig_basicprice = $value['basic_price'];
						$username = $value['user_username'];
						$serviceid = $value['gig_serviceid'];
						
					 ?>

					 	<div class="col-md">
						
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

			
		<div class="row" style="background-color: 	#D3D3D3; margin-bottom: 10px; height: 200px;">
					<div class="col-md" style="text-align: center; margin-top: 2%; padding: 5px;">
						<h1>Your Terms</h1>
						<p>Whatever you need to simplify your to do list, no matter your budget.</p>
					</div>

					<div class="col-md" style="text-align: center; margin-top: 2%; padding: 5px;">
						<h1>Your Timeline</h1>
						<p>Find services based on your goals and deadlines, it’s that simple.</p>
					</div>

					<div class="col-md" style="text-align: center; margin-top: 2%; padding: 5px;">
						<h1>Your Safety</h1>
						<p>Your payment is always secure, Fiverr is built to protect your peace of mind.</p>
					</div>
				</div>

		

	


	<!-- footer section -->
	<?php
		include 'footer.php';
	?>
	
