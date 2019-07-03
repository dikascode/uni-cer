<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && $_REQUEST['submit'] == 'Update'){

	$signature = User::dataSanitize($_REQUEST['edit_sign']);
	$buyer_desc = User::dataSanitize($_REQUEST['edit_desc']);

		$desc = new User;

		$output = $desc->editBuyerDesc($_SESSION['userid'], $buyer_desc, $signature);


}

?>

<div class="row">
				


					<div class="col-md" style="text-align: center;">
						<div>
							<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">

							<!-- profile picture -->

								<!-- if statement to choose between an avatar or user's image here -->

							<?php
								
								if(empty($_SESSION['photo'])){if ($_SESSION['gender'] == 'Male') {
							?>

								<img class="img-fluid rounded-circle" style="width: 100px; height: 100px;" src="images/male-user.png" ><br>
								

								
							<?php

								}else{
							
							?>
								<img class="img-fluid rounded-circle" style="width: 100px; height: 100px;" src="images/woman-avatar.png" ><br>
								

							<?php

							}
							}else{
							?>

								<img class="img-fluid rounded-circle" style="width: 100px; height: 100px;" src="<?php echo $_SESSION['photo']?>" >
								<!-- <a href="uploadProfilePic.php">Upload Profile Picture</a> -->

							<?php
							}
						?>

						</div>
						<h4 style=""><?php if (isset($_SESSION['username'])) {
							echo $_SESSION['username'];
						} ?>
							
						</h4>



						<p>
							
							<textarea style="height: 120px;" name="edit_sign" class="form-control" placeholder="Update your signature"><?php if (isset($output['user_signature'])) {echo $output['user_signature'];}?></textarea>

						</p>
						<hr>
					</div>
				</div>

			<!-- 	<div class="row">
					<div class="col-md">
						<a href="userpublicmode.php?id=<?php echo $_SESSION['userid']; ?>" class="btn purplebg form-control">View Public Mode</a>
						<hr>
					</div>
				</div> -->

				<div class="row">
					<div class="col-md">
						<p><a href="uploadProfilePic.php"><i class="fas fa-upload purpletext"></i> Upload Profile Picture</a></p>
						
						<p><i class="fas fa-user purpletext"></i><span> Unilancer</span><span style="float: right">Since <?php if (isset($output['user_datereg'])) {
							echo date('j M Y', strtotime($output['user_datereg']));
						} ?></span></p>
						
						<hr>

					</div>

				</div>

				<div class="row">

					<div class="col-md">
						<h5 style="float: left;">Description</h5>
						<div style="clear: both;"></div>
						<!-- <?php if (isset($desc)) {
							echo $desc;
						} ?> -->
						<p>
							<textarea name="edit_desc" class="form-control" placeholder="Update your description"><?php if (isset($output['user_desc'])) {echo $output['user_desc'];} ?></textarea>
							<input type="submit" name="submit" class="btn join-button" value="Update">
								
						</p>

					

						
						 <hr>
						
					</div>
				</form>

				</div>

				<div class="row">
					<div class="col-md">
						<!-- <h5>Skills</h5>
						<a href="#" class="badge badge-primary">JQuery</a> <a href="#" class="badge badge-warning">PHP</a> <a href="#" class="badge badge-success">HTML&CSS</a>
						<a href="#" class="badge badge-primary">SQL</a> -->
					</div>
				</div>
			