<?php

session_start();

	
	include_once('buyer_header.php');

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		// echo "<pre>";
		// print_r($_FILES);
		// echo "</pre>";

		//create object of users class

		$userobj = new User;
		$profilepic = $userobj->uploadProfileImage();

	}

	?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<?php include_once('buyer_side_bar.php'); ?>
			</div>
			<div class="col-md-9">
				<h1>Upload Profile Photo</h1>
				<?php if (isset($profilepic)) {
					echo $profilepic;
				}  ?>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">
					<div class="form-group">
						<!-- <div class="col-md-2">
						</div> -->
						<div class="col-md">
							<input class="form-control" type="file" name="profilephoto" id="profilephoto">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md">
							<input class="btn purplebg" type="submit" name="submit" value="Upload" />
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>


	<?php

	include_once('footer.php');
	?>

