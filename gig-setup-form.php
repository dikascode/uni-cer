

		<!-- Menu bar section -->

		<?php

			include_once  ('header3.php');
		 ?>

		<!-- Submenu listing market options -->
		<div id="secondmenu" class="row">
			

			<div class="col-md">
				<ul class="second-menu-list">
						<li><a href="#">Writing</a></li>
						<li><a href="#">Design</a></li>
						<li><a href="#">Programing & Tech</a></li>
						<li><a href="#">Digital Marketing</a></li>
						<li><a href="#">Video & Animation</a></li>
						<li><a href="#">Music & Audio</a></li>
						<li><a href="#">Business</a></li>
						<li><a href="#">Final Year Research</a></li>
						
				</ul>
			</div>
		</div>

		<!-- Gig set up form section -->

		<div class="row" id="gigform">
			
			<div class="col-md" >
				<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>">
				<div class="row purplebg">
					<div class="col-md ">
						<h3>OVERVIEW</h3>
					</div>
				</div>

				<!-- gig title section -->

				<div class="row">
					<div class="col-md-2 marginTop"><h3>Gig Title</h3>
					</div>
					<div class="col-md marginTop"><textarea id="title_" class="form-control" placeholder="Title Here"></textarea>
					<span id="err_title"></span>
					</div>
				</div>

				<div class="row">
					<div class="col-md-2 marginTop"><h6 class="">Category</h6>
					</div>
					<div class="col-md">
						<select id="category" class="form-control marginTop">
							<option value="category">Select a Category</option>
							<option>Writing</option>
							<option>Design & Creative</option>
							<option>Programing & Tech</option>
							<option>Digital Marketing</option>
							<option>Video & Animation</option>
							<option>Music & Audio</option>
							<option>Business</option>
							<option>Final Year Project</option>
						</select>
						<span id="err_cat"></span>
					</div>
					<div class="col-md">
						<select id="subcategory" class="form-control marginTop">
							<option value="subcategory">Select a Subcategory</option>
							<option>Web Development</option>
							<option>Game Development</option>
							<option>Ecommerce</option>
							<option>Word Press</option>
							<option>Software Programing</option>
							<option>UI/UX</option>
							<option>User Testing</option>
							<option>Data Analytics</option>
							<option>Mobile Apps</option>
						</select>
						<span id="err_subcat"></span>
					</div>
				</div>

				<div class="row purplebg marginTop">
					<div class="col-md ">
						<h3>PLAN & PRICING</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-md table-responsive marginTop">
						
						<table class="table table-striped table-hover">

								<tbody>
									<tr>
										<td>Plan</td>
										<td class="my-textAlign" width="25%">	
											<p class="myBold">Premium</p>	
										</td>
										<td class="my-textAlign" width="25%">
											<p class="myBold">Standard</p>
										</td>
										<td class="my-textAlign" width="25%">	
											<p class="myBold">Basic</p>
										</td>
									</tr>

									<tr>
										<td></td>

										<td><textarea id="premium" class="form-control marginTop" placeholder="Name your plan"></textarea><span id="err_premium"></span></td>

										<td> <textarea id="standard" class="form-control marginTop" placeholder="Name your plan"></textarea><span id="err_standard"></span></td>

										<td><textarea id="basic" class="form-control marginTop" placeholder="Name your plan"></textarea><span id="err_basic"></span></td>
									</tr>

									<tr>
										<td></td>

										<td><textarea id="premium_offer" class="form-control marginTop" placeholder="Describe what you are offering in your plan"></textarea><span id="err_premium1"></span></td>

										<td> <textarea id="standard_offer" class="form-control marginTop" placeholder="Describe what you are offering in your plan"></textarea><span id="err_standard1"></span></td>

										<td><textarea id="basic_offer" class="form-control marginTop" placeholder="Describe what you are offering in your plan"></textarea><span id="err_basic1"></span></td>
									</tr>

									<tr>
										<td>Custom Design</td>
										<td class="my-textAlign"><input class="" type="checkbox" name=""></td>
										<td class="my-textAlign"><input class="" type="checkbox" name=""></td>
										<td class="my-textAlign"><input class="" type="checkbox" name=""></td>
									</tr>

									<tr>
										<td>Responsive Design</td>
										<td class="my-textAlign"><input class="" type="checkbox" name=""></td>
										<td class="my-textAlign"><input class="" type="checkbox" name=""></td>
										<td class="my-textAlign"><input class="" type="checkbox" name=""></td>
									</tr>

									<tr>
										<td>Include Source Code</td>
										<td class="my-textAlign"><input class="" type="checkbox" name=""></td>
										<td class="my-textAlign"><input class="" type="checkbox" name=""></td>
										<td class="my-textAlign"><input class="" type="checkbox" name=""></td>
									</tr>

									<tr>
										<td>Number of Pages</td>
										<td class="my-textAlign"><input class="form-control-sm" type="number" name=""></td>
										<td class="my-textAlign"><input class="form-control-sm" type="number" name=""></td>
										<td class="my-textAlign"><input class="form-control-sm" type="number" name=""></td>
									</tr>

									<tr>
										<td>Number of Revisions</td>
										<td class="my-textAlign">
											<select class="form-control">
												<option>0</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>Unlimited</option>
											</select>
										</td>
										<td class="my-textAlign">
											<select class="form-control">
												<option>0</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>Unlimited</option>
											</select>
										</td>
										<td class="my-textAlign">
											<select class="form-control">
												<option>0</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>Unlimited</option>
											</select>
										</td>
									</tr>

									<tr>
										<td>Delivery Time</td>
										<td class="my-textAlign">
											<select id="premium_time" class="form-control">
												<option value="days">Select Days</option>
												<option>1 Day</option>
												<option>2 Days</option>
												<option>3 Days</option>
												<option>4 Days</option>
												<option>5 Days</option>
												<option>2 Months</option>
											</select>
											<span id="err_time1"></span>
										</td>
										<td class="my-textAlign">
											<select id="standard_time" class="form-control">
												<option value="days">Select Days</option>
												<option>1 Day</option>
												<option>2 Days</option>
												<option>3 Days</option>
												<option>4 Days</option>
												<option>5 Days</option>
												<option>2 Months</option>
											</select>
											<span id="err_time2"></span>
										</td>
										<td class="my-textAlign">
											<select id="basic_time" class="form-control">
												<option value="days">Select Days</option>
												<option>1 Day</option>
												<option>2 Days</option>
												<option>3 Days</option>
												<option>4 Days</option>
												<option>5 Days</option>
												<option>2 Months</option>
											</select>
											<span id="err_time3"></span>
										</td>
									</tr>

									<tr>
										
										<td>Price</td>
										<td class="my-textAlign"><input name="premium_price" class="form-control-sm" type="text" placeholder="Max of N500,000">
										<span id="err_price1"></span></td>

										<td class="my-textAlign"><input name="standard_price" class="form-control-sm" type="text" placeholder="Max of N500,000">
											<span id="err_price2"></span>
										</td>

										<td class="my-textAlign"><input name="basic_price" class="form-control-sm" placeholder="Max of N500,000"  type="text">
											<span id="err_price3"></span>
										</td>
									
									</tr>
								</tbody>
							</table>

					</div>
				</div>


				<div class="row purplebg marginTop">
					<div class="col-md ">
						<h3>GIG DESCRIPTION</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3 marginTop"><h3>Requirements</h3></div>
					<div class="col-md marginTop">
						<span class="myBold">REQUIREMENT <span class="badge purplebg">#1</span></span>
						<textarea class="form-control" placeholder="Tell your client what you need to get started."></textarea>
						<a href="#" class="purpletext"><i class="fa fa-plus"></i> Add another requirement</a></div>
				</div>

				<div class="row purplebg marginTop">
					<div class="col-md ">
						<h3>GIG IMAGE</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-md">
						<h4>Build your Gig gallery</h4>
						<p>Add captivating pictures that will make your gig stand out</p>
					</div>
				</div>

				<div class="row ">
					<div class="col-md">
						<img class="img-fluid" src=".jpg" style="border:1px lightgrey dotted; width: 200px; height: 120px;">					
					</div>

					<div class="col-md">
						<img class="img-fluid" src=".jpg" style="border:1px lightgrey dotted; width: 200px; height: 120px;">					
					</div>

					<div class="col-md">
						<img class="img-fluid" src=".jpg" style="border:1px lightgrey dotted; width: 200px; height: 120px;">					
					</div>
				</div>

				<div class="row marginTop">
					<div class="col-md">
						<button id="gig_create_btn" type="submit" class="btn join-button purpletext">Continue</button>
					</div>
				</div>
			</form>
			</div>
			
		</div>

	</div>

	<!-- Footer Section -->

	<?php
		include 'footer.php';
	?>




	<!-- External javacript -->
	

	<!-- jQuery -->
	<script type="text/javascript" src="bootstrap/js/jquery-3.3.1.js"></script>
	
	<!-- Popper -->
	<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
	
	<!-- Bootstrap Js -->
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/unilancer.js"></script>




</body>
</html>