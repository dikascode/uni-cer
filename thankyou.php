

<?php 
session_start();
if ($_SESSION['usertype'] == '1') {
		include_once('header2.php');
	 }else{

	 	include_once('buyer_header.php');
	 }

 ?>

 <div class="row">
 	<div class="col-md">
 		<div class="alert alert-success">
 			Thank you, your transaction was successful.
 			<p>Did you know, Nigerian students can help you deliver your project for as low as your budget can go, and professionally too? Find them here <?php echo "<a href= 'index.php'>Home Page</a>"; ?></p>
 		</div>
 		
 	</div>
 </div>


<?php include_once('footer.php'); ?>