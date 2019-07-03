
		
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

			// echo "<pre>";
			// print_r($result[0]['marketplace']);
			// echo "</pre>";
			// exit;



		?>

		<!-- market aith its sub services section  -->
		<div class="row">
			<div class="col-md">
				<h1><?php if (isset($result[0]['marketplace'])) {
							echo $result[0]['marketplace'];
						}  ?>
	
				</h1>
				<p>Get all your <?php if (isset($result[0]['marketplace'])) {
							echo $result[0]['marketplace'];
						}  ?> 
						jobs done by the best and most trust worthy Nigerian university students
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3" id="techlist">
				
						<h5><?php if (isset($result['0']['marketplace'])) {
							echo $result['0']['marketplace'];
						}  ?></h5>
						<ul>
							<li><a href="#">WordPress</a></li>
							<li><a href="">Web Development</a></li>
							<li><a href="#">E-commerce</a></li>
							<li><a href="#">Mobile Apps</a></li>
							<li><a href="#">Data Analytics</a></li>
							<li><a href="#">User Testing</a></li>
							<li><a href="#">UI/UX</a></li>
							<li><a href="#">Software Programing</a></li>
							<li><a href="#">Game Development</a></li>
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

					 	<div class="col-md d-flex justifyForMe">
						
						<div class="gigBox">
							<div style="width:230px; height:150px; background-color: black;">
							<img class="img-fluid" style="height: 150px; width: 230px; " src="<?php if (isset($gigimage)) {
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
				</div>

				
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

	</div>
	
	

	<!-- jQuery -->
	<script type="text/javascript" src="bootstrap/js/jquery-3.3.1.js"></script>
	
	<!-- Popper -->
	<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
	
	<!-- Bootstrap Js -->
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<!-- External javacript -->
	<script type="text/javascript" src="js/unilancer.js"></script>

</body>
</html>