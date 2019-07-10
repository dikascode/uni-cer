

	<?php

		session_start();
			if ($_SESSION['usertype'] == '1') {
				include_once('header2.php');
			}else{

			header("Location: http://localhost/6thprojectphp/signin.php");
			}

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		
		
		// echo "<pre>";
		// print_r($_FILES);
		// echo "</pre>";

		//create object of users class

		$gigobj = new Gigs;

		$output = $gigobj->deletegig($_GET['gigid']);
	}

	?>

	<div class="container-fluid" style="min-height:400px;">
		<div class="row">
			
			<div class="col-md-9">
				<h1>Are you sure you want to delete <?php if (isset($_GET['gigtitle'])) {
					echo $_GET['gigtitle'];
				} ?> gig?</h1>
				<?php if (isset($output)) {
						
						echo $output;
				} ?>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>?gigid=<?php echo $_GET['gigid']; ?>&gigtitle= <?php echo $_GET['gigtitle'];?>" enctype="multipart/form-data">
					
					<div class="form-group">
						<div class="col-md">

							<input class="btn btn-danger" type="submit" name="submit" value="Yes, Delete Gig" />
						</div>
				</div>
					
				</form>
			</div>
		</div>
	</div>


	<?php

	include_once('footer.php');
	?>

