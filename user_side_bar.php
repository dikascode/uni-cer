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
								<a href="uploadProfilePic.php">Upload Profile Picture</a>	

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
						<p><?php if (isset($_SESSION['signature'])) {
							echo $_SESSION['signature'];
						} ?></p>
						<hr>
					</div>
				</div>

				<div class="row">
					<div class="col-md">
						<button class="btn purplebg form-control">View Public Mode</button>
						<hr>
					</div>
				</div>

				<div class="row">
					<div class="col-md">
						<p><i class="fas fa-map-marker-alt purpletext"></i><span> From</span><span style="float: right">FUT</span></p>
						<p><i class="fas fa-user purpletext"></i><span> Unilancer</span><span style="float: right">Since <?php echo $_SESSION['date']?></span></p>
						<p><i class="fas fa-paper-plane purpletext"></i><span> Last Delivery</span><span style="float: right">1 day</span></p>
						<hr>

					</div>

				</div>

				<div class="row">

					<div class="col-md">
						<h5 style="float: left;">Description</h5> <a id="editDesc" class="purpletext" href="#" style="float: right;">Edit Description <i class="fas fa-pen purpletext"></i></a>
						<div style="clear: both;"></div>
						<!-- <?php if (isset($desc)) {
							echo $desc;
						} ?> -->
						<p id="userDesc"><?php if (isset($_SESSION['user_desc'])) {
							echo $_SESSION['user_desc'];
						} ?>
						</p>

						
						 <hr>
						
					</div>

				</div>

				<!-- <div class="row">
					<div class="col-md">
						<h5>Social Links</h5>
						<ul>
							<a href="#"><li>Facebook</li></a>
							<a href="#"><li>Google</li></a>
							<a href="#"><li>Linkedln</li></a>
							<a href="#"><li>Behance</li></a>
							<a href="#"><li>GitHub</li></a>
						</ul>
						<hr> 
					</div>
				</div> -->

				<div class="row">
					<div class="col-md">
						<h5>Skills</h5>
						<a href="#" class="badge badge-primary">JQuery</a> <a href="#" class="badge badge-warning">PHP</a> <a href="#" class="badge badge-success">HTML&CSS</a>
						<a href="#" class="badge badge-primary">SQL</a>
					</div>
				</div>