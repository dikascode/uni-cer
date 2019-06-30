<div class="row">

					<div class="col-md" style="text-align: center;">
						<div>

							<!-- profile picture -->

								<!-- if statement to choose between an avatar or user's image here -->

							<?php
								
								if(empty($sellergender)){if ($sellergender == 'Male') {
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

								<img class="img-fluid rounded-circle" style="width: 100px; height: 100px;" src="<?php echo $sellerimage?>" >

							<?php
							}
							?>

						</div>
						<h4 style=""><?php if (isset($username)) {
									echo $username;
								} ?></h4>
						<!-- <span>Online status here</span> -->
						<p><?php if (isset($signature)) {
									echo $signature;
								} ?></p>
						<input type="button" data-toggle="modal" data-target="#messageModal" class="btn btn-md purplebg" value="Message Me">
						<hr>
					</div>
				</div>

				
				<div class="row">
					<div class="col-md">
						<p><i class="fas fa-map-marker-alt purpletext"></i><span> From</span><span style="float: right"><?php if (isset($uniabbr)) {
									echo $uniabbr;
								} ?></span></p>
						<p><i class="fas fa-user purpletext"></i><span> Unilancer</span><span style="float: right">Since <?php echo $datereg; ?></span></p>
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
						<p><?php if (isset($sellerdesc)) {
							echo $sellerdesc;
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


				<!-- Modal -->
					<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div  class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalCenterTitle">Send Me Your Message</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        <div class="row" >
					        	<div class="col-md-3" style="font-size: 12px;">
					        		<p><img class="rounded-circle" style="width: 70px; height: 70px;" src="<?php if(isset($sellerimage)){ echo $sellerimage;}?>"><span style="font-weight: bold"><?php if (isset($username)) {
													echo strtolower( $username);
												} ?></span>
									</p>
					        		
					        		<span style="font-weight: bold;">Please include:</span>

					        		<ol style="padding: 0; margin-left: 5px;">
					        			<li>Project Description</li>
					        			<li>Necessary files</li>
					        			<li>Specific Instructions</li>
					        			<li>Budget</li>
					        		</ol>
					        	</div>
					        	<div class="col-md-9" style="padding: 0; margin: 0;">

					        		<textarea class="form-control"  style="width: 350px; height: 200px;"></textarea>
					        		<input class="marginTop" type="file" name="file">
					        		
					        	</div>
					        </div>
					      </div>
					      <div class="modal-footer">
					       
					        <button type="button" class="btn join-button">Send</button>
					      </div>
					    </div>
					  </div>
					</div>

