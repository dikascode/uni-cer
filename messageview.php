<?php

	session_start();

	include_once('uni_Class.php');

	

	$msgobj = new Message;

	$output = $msgobj->selectMesssages($_SESSION['userid'], $_POST['senderid'] );


	
	// echo "<pre>";
	// print_r($_POST['senderid']);
	// echo "</pre>";

	foreach ($output as $key => $value) {
		$sender = $value['user_username'];
		$senderimage = $value['user_picture'];
		$msgtime = $value['message_time'];
		$msg = $value['inbox_message'];
		$attachment = $value['inbox_attachment'];

	

?>
		<div>
			<img class="rounded-circle" style="width: 30px; height: 30px;" src="<?php echo $senderimage; ?>"> <small style="margin-left: 5px;"><?php echo $sender; ?></small><small style="margin-left: 5px;"><?php echo $msgtime; ?></small>
			<p class="" style="margin-left: 5%;"><?php echo $msg; ?></p>
			<span><?php if (isset($attachment)) {
				echo "<iframe class='embed-responsive embed-responsive-4by3' style='height: 200px; width:400px' src='$attachment'</iframe>";
			} ?></span> 
		</div>

<?php }?>