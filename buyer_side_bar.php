
<div class="row">

					<div class="col-md" style="text-align: center;">
						<div>

							<!-- profile picture -->

								<!-- if statement to choose between an avatar or user's image here -->

							<?php
								
								if(empty($_SESSION['photo'])){if ($_SESSION['gender'] == 'Male') {
							?>

								<img class="img-fluid rounded-circle" style="width: 100px; height: 100px;" src="images/male-user.png" ><br>
								<a href="uploadProfilePic.php">Upload Profile Picture</a>
								
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
						<p>Thank you for stopping by, I can't wait to start work on your project</p>
						<hr>
					</div>
				</div>

				<div class="row">
					<div class="col-md">
						<p><i class="fas fa-user purpletext"></i><span> Unilancer</span><span style="float: right">Since <?php echo $_SESSION['date']?></span></p>
						
						<hr>

					</div>

				</div>