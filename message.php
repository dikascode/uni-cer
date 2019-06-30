<?php 
	if ($_SESSION['usertype'] == 'Seller') {
		include_once('header2.php');
	}else{

		include_once('buyer_header.php');
	}

	?>

<div class="container">
	<div class="row">
		<div id="newMessage" class="col-md-4" style="border: 1px solid grey;">
			<!-- New messages section -->
			sdsd ksnds mskds mksdmks 
		</div>
		<div class="col-md-8" style="border: 1px solid grey;">
			<div class="row">
				<div class="col-md">knknas ksdksj kaskdsa ksmks</div>
			</div>

			<div class="row">
				<div class="col-md-8">
					<!-- Message view port -->
					<div class="row">
						<div id="message_view_port" class="col-md"  style="border-right: 1px solid lightgrey;">skdkada kss jsjs sojs</div>
					</div>

					<!-- Texting area -->
					<div class="row"  style="border-right: 1px solid lightgrey;">
						<div class="col-md">
							<form>
								<div class="form-group">
									<textarea class="form-control" name="messagearea"></textarea>
									<input class="marginTop" type="file" name="file">
								</div>

								<div class="form-group">
									<input style="float: right;" class="btn join-button marginbott" type="submit" name="submit" value="Send">
									<span style="clear: both;"></span>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4">kmkd kkd lmld lkasdk lmds</div>
			</div>
		</div>
	</div>
</div>


<?php include_once('footer.php') ?>