<?php
	session_start();
	if ($_SESSION['usertype'] == '1') {
		include_once('header2.php');
	 }elseif ($_SESSION['usertype'] == '2'){

	 	include_once('buyer_header.php');
	 }else{

	 	header("Location: http://localhost/6thprojectphp/signin.php");
	 }


	$gigid = $_GET['gigid'];
	$sellerid = $_GET['sellerid'];
	$gigplan = $_GET['gigplan'];

	$gig = new Gigs;
	$result = $gig->getSingleGig($gigid, $sellerid);

	$gigimage = $result['gig_headerpic'];

	//flat charge from unilancer

	$serviceFee = 100;
	// echo "<pre>";
	// print_r($result);
	// echo "<pre>";
	// exit;

?>

	<div class="container">
		<div class="row" style="margin-top: 10%; margin-bottom: 20%;">
			<div style="border: 1px lightgrey solid; margin-left: 30%;" class="col-md-5">
				<div class="row" style="border-bottom: lightgrey solid 1px;">
					<div class="col-md purplebg">
						<h3 style="text-align: center;">Order Details</h3>
					</div>
				</div>

				<div class="row">
					<div style="padding: 0" class="col-md-5">
						<div class="img-fluid" style="width:240px; min-height:200px; background-color: black; background-image: url('<?php if (isset($gigimage)) {
								 echo $gigimage;
							} ?>'); background-repeat: no-repeat; background-size: cover;"></div>
					</div>

					<div class="col-md-7">
						<p >Title:<span class="myBold"><?php if (isset($result['gig_title'])) {
							echo $result['gig_title'];
						} ?></span> </p>
						<p>Seller: <span class="myBold"><?php if (isset($result['user_username'])) {
							echo $result['user_username']; } ?></span></p>

						<p>Plan Description: <span class="myBold">

							<?php 
							if ($gigplan == $result['premium_title']) {
								$desc = $result['premium_desc'];
								echo $desc;
							}elseif ($gigplan == $result['standard_title']) {
								$desc = $result['standard_desc'];
								echo $desc;
							}elseif ($gigplan == $result['basic_title']) {
								$desc = $result['basic_desc'];
								echo $desc;
						}  ?></span>
						</p>

						<p>Delivery Time: <span class="myBold"><?php 
							if ($gigplan == $result['premium_title']) {
								$ordertime = $result['premium_delivery'];
								echo $ordertime;
							}elseif ($gigplan == $result['standard_title']) {
								$ordertime = $result['standard_delivery'];
								echo $ordertime;
							}elseif ($gigplan == $result['basic_title']) {
								$ordertime = $result['basic_delivery'];
								echo $ordertime;
						}  ?> Days</span></p>
						<p>Price: <span class="badge badge-info">&#8358;<?php 
							if ($gigplan == $result['premium_title']) {
								$price = $result['premium_price'];
								echo number_format($price,2);
							}elseif ($gigplan == $result['standard_title']) {
								$price = $result['standard_price'];
								echo number_format($price,2);
							}elseif ($gigplan == $result['basic_title']) {
								$price = $result['basic_price'];
								echo number_format($price,2);
						}  ?></span></p>
						<p >Service Fee: <span class="myBold">&#8358;<?php echo number_format($serviceFee, 2); ?></span></p>
						
					</div>
				</div>

				<div class="row purplebg" style="border-top:1px black dotted; padding-top: 2%;">
					<div class="col-md-5"></div>
					<div class="col-md-7"><p><span class="myBold">Total =</span> &#8358;<?php $orderprice = ($price + $serviceFee);
					echo number_format($orderprice, 2); ?> </p></div>
				</div>

				<div class="row">
					<?php 

						$orderprice = $orderprice * 100; //convert naira to kobo

						if (isset($_SESSION['email'])) {
							$buyer_email = $_SESSION['email'];
						}

						if (isset($_SESSION['buyeremail'])) {
							$buyer_email = $_SESSION['buyeremail'];
						}
						
						if (isset($_SESSION['userid'])) {
							$buyerid = $_SESSION['userid'];
						}
						
						//  var_dump($buyerid);
						// exit;
						
					?>
					<div class="col-md-5"></div>
					<div class="col-md-7">
						<?php if ($sellerid == $_SESSION['userid']) {	
						 ?>
						<input style="display: none; margin-bottom: 5%; margin-top: 5%;" class="btn btn-md join-button" type="button" value="Order" name="submit" onclick="payWithPaystack(<?php echo $orderprice; ?>, <?php echo $gigid; ?>)">

						<?php }else{ ?>

							<input style="margin-bottom: 5%; margin-top: 5%;" class="btn btn-md join-button" type="button" value="Order" name="submit" onclick="payWithPaystack(<?php echo $orderprice; ?>, <?php echo $gigid; ?>)">

						<?php } ?>
					</div>

				</div>
				
			</div>
		</div>
	</div>


<?php include_once('footer.php');  ?>