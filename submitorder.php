


<?php 
		session_start();

		include_once('header2.php');

		$inboxobj = new Message;

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		// $msg = $_POST['msgview'];
		$message = User::dataSanitize($_REQUEST['message']);

		if (empty($message)) {
			
			$err_msg = "<span class='text-danger'>Message field is required</span>";
		}



		if (isset($_FILES['file']) && strlen($err_msg) == 0) {
			

			$inboxobj->insertMessageFile($_GET['buyerid'], $_SESSION['userid'], $message);

			$submit = 'Submitted';
			$orderobj= new Order;
			$orderobj->updateOrder($submit, $_GET['orderid']);
		}

		}

 ?>


	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md boxshadow" style="background-color: #4B0082; padding: 10px;">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>?orderid=<?php echo $_GET['orderid'];?>&sellerid=<?php echo $_GET['sellerid'];?>&buyerid=<?php echo $_GET['buyerid'];; ?>" enctype="multipart/form-data">
				<div class="form-group">
					<textarea name="message" class="form-control" style="height: 200px;"></textarea>
				</div>
				<?php if (isset($err_msg)) {
					echo $err_msg;
				} ?>

				<div class="form-group">
					<input type="file" name="file" style="color: white;">
				</div>
				<?php if (isset($err_file)) {
					echo $err_file;
				} ?>

				<div class="form-group">
					<input type="submit" class="btn purpletext" name="submit" value="Submit Order" style="color: white; border: 2px white solid;">
				</div>
			</div>
			</form>

			<div class="col-md-3"></div>
		</div>
	</div>


<?php include_once('footer.php') ?>