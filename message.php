<?php 
	// if ($_SESSION['usertype'] == 'Seller') {
		include_once('header2.php');
	// }else{

	// 	include_once('buyer_header.php');
	// }

		$inboxobj = new Message;

		$output = $inboxobj->distinctSender($_SESSION['userid']);

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		// $msg = $_POST['msgview'];
		$message = User::dataSanitize($_REQUEST['messagearea']);

			$input= $inboxobj->insertMessage(1, $_SESSION['userid'], $message);

		}


		// echo "<pre>";
		// print_r($output);
		// echo "</pre>";

	?>

<div class="container" style="min-height: 500px; margin-top: 5%">
	<div class="row boxshadow">
		<div id="newMessage" class="col-md-3">
			<!-- New messages section -->
			
			<?php foreach ($output as $key => $value) {
				$sender = $value['user_username'];
				$sender_image = $value['user_picture'];
				$_SESSION['senderid'] = $value['inbox_senderid'];

			 ?>
			 <div class="row marginTop" style="border-bottom: 1px lightgrey dotted;">

			 	<div class="col-md marginTop marginbott">
			 		<a id="sender<?php echo $value['inbox_senderid'] ?>" data-senderid="<?php echo $value['inbox_senderid']; ?>" href="#"><img class="rounded-circle" src="<?php echo $sender_image ?>" style="width: 70px; height: 70px;"> <span style="font-weight: bold; margin-left: 5%"><?php echo $sender; ?></span></a>
			 	</div>
			</div>
			 <?php } ?>
			
		</div>
		<div class="col-md-9" style="border-left: 1px solid grey;">
			<div class="row">
				<div class="col-md"><!-- sender details here --></div>
			</div>

			<div class="row">
				<div class="col-md">
					<!-- Message view port -->
					<div class="row marginTop">
						<div id="message_view_port" class="col-md"  style=""></div>
					</div>

					<!-- Texting area -->
					<div class="row"  style="border-right: 1px solid lightgrey;">
						<div class="col-md" id="formarea">
							<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
								<div class="form-group">
									<textarea id="msgarea" class="form-control boxshadow" name="messagearea"></textarea>
									<input class="marginTop " type="file" name="file">
								</div>

								<div class="form-group">
									<input style="float: right;" class="btn join-button marginbott" id="submit" type="submit" name="submit" value="Send">
									<span style="clear: both;"></span>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- <div class="col-md-4">kmkd kkd lmld lkasdk lmds</div> -->
			</div>
		</div>
	</div>
</div>


<?php include_once('footer.php') ?>