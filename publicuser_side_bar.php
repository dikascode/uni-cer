<div class="row">

					<div class="col-md" style="text-align: center;">
						<div>

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

							<?php
							}
							?>

						</div>
						<h4 style=""><?php if (isset($_SESSION['username'])) {
							echo $_SESSION['username'];
						} ?></h4>
						<!-- <span>Online status here</span> -->
						<p>Thank you for stopping by, I can't wait to start work on your project</p>
						<a href="#" class="btn btn-md purplebg">Message me</a>
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
						<h5 style="float: left;">Description</h5>
						<div style="clear: both;"></div>
						<!-- <?php if (isset($desc)) {
							echo $desc;
						} ?> -->
						<p>Alright, let's cut to the chase. What do you what to know?
						 I'm a creative writer with several years of experience writing stories and helping businesses make profit with online content.
						 
						 I can write sizzling romantic stories with words that will melt your readers heart like the Sun and enchant their eyes to each paragraph like a spell.
						 
						 I can also write web content that will convert visitors to your website into sales.
						 
						 And my Ideas are 'MIND-FUCK'
						 
						 What's more?
						 I'm also a talented graphics designer and I write poetry for pleasure.
						 
						 Hire me already!
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