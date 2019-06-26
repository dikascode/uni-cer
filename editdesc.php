<?php
	include_once('uni_Class.php');

	session_start();

	$usertext = user::dataSanitize($_POST['output']);

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		//$text = $usertext;
		$text = User::dataSanitize($_REQUEST['userdesc']);

		$desc = new User;

		$output = $desc->editDesc($_SESSION['userid'], $text);
		 var_dump($text);


	}

	



?>

<form method="post" id='descForm' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>?id=<?php echo $_GET['id']; ?>&name= <?php echo $_GET['name'];?>">
	<div class="form-group">
		<div class="col-md">
	<textarea style="height: 200px;" name="userdesc" class="form-control"><?php echo $usertext; ?></textarea>
		</div>
	</div>

	<div class="form-group">
		<div class="col-md">
		<input type="submit" id="savedesc" name="submit" class="btn join-button" value="Save">
		</div>
	</div>
	
</form>


<!-- <script type="text/javascript">
	$(document).ready(function(){

		$('#savedesc').click(function(){

			alert('hi');

			$('#descForm').hide();
		});
	})
</script> -->