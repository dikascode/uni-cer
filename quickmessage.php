
<?php
	session_start();

	 if ($_SESSION['usertype'] == 'Seller') {
		include_once('header2.php');
	 }else{

	 	include_once('buyer_header.php');
	}


		$gigid = $_GET['gigid'];
				$sellerid = $_GET['sellerid'];

				$gig = new Gigs;
				$result = $gig->getSingleGig($gigid, $sellerid);

			

			$reg_err = array();

			if($_SERVER['REQUEST_METHOD'] == 'POST'){

				


				$message = User::dataSanitize($_REQUEST['message']);
				//$file = User::dataSanitize($_REQUEST['file']);

				if (empty($message)) {
			
					$reg_err['message'] = "<span class='text-danger'>Message field is required</span>";
				}

				if (count($reg_err) == 0) {

					//instatiate object

				$inboxobj = new Message();
				$output = $inboxobj->insertMessage($sellerid, $_SESSION['userid'], $message);

			}
				// var_dump($output);
			}
			
		 ?>

		 <div class="container">


				 			<div class="row">
				 					<div class="col-md">
				 						<h5>Send Me Your Message</h5>
				 					</div>
				 			</div>			

					 
					        <div class="row" >
					        	<div class="col-md-3" style="font-size: 15px;">
					        		<p><img class="rounded-circle" style="width: 70px; height: 70px;" src="<?php if(isset($result['user_picture'])){ echo $result['user_picture'];}?>"><br><span style="font-weight: bold"><?php if (isset($result['user_username'])) {
													echo strtolower( $result['user_username']);
												} ?></span>
									</p>
					        		
					        		<span style="font-weight: bold;">Please include:</span>

					        		<ol style="padding: 0; margin-left: 5px;">
					        			<li>Project Description</li>
					        			<li>Necessary files</li>
					        			<li>Specific Instructions</li>
					        			<li>Budget</li>
					        		</ol>
					        		<a href="gig_publicview.php?gigid=<?php echo $_GET['gigid']; ?>&sellerid=<?php echo $_GET['sellerid'];?>">Back to Previous Page</a>
					        	</div>
					        	<div class="col-md-9" style="padding: 0; margin: 0;">

					        		<!-- Message form for gig public view -->
					        	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?sellerid=<?php echo $sellerid; ?>&userid=<?php echo $_SESSION['userid']; ?>&gigid=<?php echo $gigid; ?>" enctype="multipart/form-data">

					        		<textarea name="message" class="form-control"  style="width: 350px; height: 200px;"></textarea>
					        		<?php if (isset($reg_err['message'])){echo $reg_err['message'];}?><br>
					        		<input class="marginTop" type="file" name="file"><br>
					        		<input type="submit" class="btn join-button marginTop" value="Send">
					        	</form>
					        		
					        	</div>
					        </div>
		</div>


		<?php include_once('footer.php') ?>
					       
					       
					        		
					    
					      
					  

