
<div class="row">

					<div class="col-md" style="text-align: center;">

						<?php if (isset($_GET['msg'])) {
						echo $_GET['msg'];
						}  ?>
						<div>

							<!-- profile picture -->

								<!-- if statement to choose between an avatar or user's image here -->

							<?php
								
								if(empty($_SESSION['photo'])){if ($_SESSION['gender'] == 'Male') {
							?>

								<img class="img-fluid rounded-circle" style="width: 100px; height: 100px;" src="images/male-user.png" ><br>
								<a href="buyer_uploadProfilePic.php">Upload Profile Picture</a>
								
							<?php

								}else{
							
							?>
								<img class="img-fluid rounded-circle" style="width: 100px; height: 100px;" src="images/woman-avatar.png" ><br>
								<a href="buyer_uploadProfilePic.php">Upload Profile Picture</a>	

							<?php

							}
							}else{
							?>

								<img class="img-fluid rounded-circle" style="width: 100px; height: 100px;" src="<?php echo $_SESSION['photo']?>" >

							<?php
							}
							?>

						</div>
						<h4 style=""><?php if (isset($_SESSION['username'])) {
							echo $_SESSION['username'];
						} ?></h4>
						<p><?php if (isset($output['user_signature'])) {
							echo $output['user_signature'];}?></p>
						<hr>
					</div>
				</div>

				<div class="row">
					<div class="col-md">
						<p><i class="fas fa-user purpletext"></i><span> Unilancer</span><span style="float: right">Since <?php if (isset($_SESSION['date'])) {
							echo date('j M Y', strtotime($_SESSION['date']));
						} ?></span></p>
						
						<hr>

					</div>

				</div>

					<div class="row">
					<div class="col-md">
						<h5 style="float: left;">Description</h5> <a class="purpletext" href="buyer_edit.php?id=<?php echo $_SESSION['userid'] ?>" style="float: right;">Edit Description <i class="fas fa-pen purpletext"></i></a>
						<div style="clear: both;"></div>
						
						 <hr>

						 <p id="userDesc"><?php if (isset($output['user_desc'])) {echo $output['user_desc'];} ?>
						</p>
						
					</div>
			</div>


