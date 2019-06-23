<?php
	include_once('uni_Class.php');

	session_start();

	$username = $_POST['output'];

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$text = User::dataSanitize($_REQUEST['userdesc']);

		$desc = new User;

		$desc->editDesc($_SESSION['userid'], $text);
	}

	



?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>?id=<?php echo $_GET['id']; ?>&name= <?php echo $_GET['name'];?>">
	<div class="form-group">
		<div class="col-md">
	<textarea style="height: 200px;" name="userdesc" class="form-control"><?php echo $username; ?></textarea>
		</div>
	</div>

	<div class="form-group">
		<div class="col-md">
		<input type="submit" name="submit" class="btn join-button">
		</div>
	</div>
	
</form>