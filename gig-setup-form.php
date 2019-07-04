

		<!-- Menu bar section -->

		<?php
			session_start();
			if ($_SESSION['usertype'] == '1') {
				include_once('header2.php');
			}else{

			header("Location: http://localhost/6thprojectphp/signin.php");
			}


			$reg_err = array();

			//instatiate class

			$gigobj = new Gigs;

			$category = $gigobj->getCategories();

			//$subcategory = $gigobj->getSubCategories();
			$language = $gigobj->getLanguage();

			// $_SESSION['userid'] = $_GET['id'];


	

	// $dbobj = new DatabaseConnect;

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
		$gigtitle = User::dataSanitize($_REQUEST['gigtitle']);
		$category_id = User::dataSanitize($_REQUEST['categoryid']);
		$subcategory_id = User::dataSanitize($_REQUEST['subcategoryid']);
		$languageid = User::dataSanitize($_REQUEST['languageid']);
		$p_plantitle = User::dataSanitize($_REQUEST['p_plantitle']);
		$s_plantitle = User::dataSanitize($_REQUEST['s_plantitle']);
		$b_plantitle = User::dataSanitize($_REQUEST['b_plantitle']);
		$p_plandesc = User::dataSanitize($_REQUEST['p_plandesc']);
		$s_plandesc = User::dataSanitize($_REQUEST['s_plandesc']);
		$b_plandesc = User::dataSanitize($_REQUEST['b_plandesc']);
		if(isset($_REQUEST['p_CD'])){$p_CD = User::dataSanitize($_REQUEST['p_CD']);}
		if(isset($_REQUEST['s_CD'])){$s_CD = User::dataSanitize($_REQUEST['s_CD']);}
		if(isset($_REQUEST['b_CD'])){$b_CD = User::dataSanitize($_REQUEST['b_CD']);}
		if(isset($_REQUEST['p_RD'])) {
			$p_RD = User::dataSanitize($_REQUEST['p_RD']); 
		}
		if (isset($_REQUEST['s_RD'])) {
			$s_RD = User::dataSanitize($_REQUEST['s_RD']);
		} 
		if (isset($_REQUEST['b_RD'])) {
			$b_RD = User::dataSanitize($_REQUEST['b_RD']); 
		}
		if (isset($_REQUEST['p_SC'])) {
			$p_SC = User::dataSanitize($_REQUEST['p_SC']); 
		}
		if (isset($_REQUEST['s_SC'])) {
			$s_SC = User::dataSanitize($_REQUEST['s_SC']);
		}
		 
		if (isset($_REQUEST['b_SC'])) {
			$b_SC = User::dataSanitize($_REQUEST['b_SC']); 
		}
		$p_pages = User::dataSanitize($_REQUEST['p_pages']); 
		$s_pages = User::dataSanitize($_REQUEST['s_pages']); 
		$b_pages = User::dataSanitize($_REQUEST['b_pages']); 
		$p_numrev = User::dataSanitize($_REQUEST['p_numrev']); 
		$s_numrev = User::dataSanitize($_REQUEST['s_numrev']); 
		$b_numrev = User::dataSanitize($_REQUEST['b_numrev']); 
		$p_delivery = User::dataSanitize($_REQUEST['p_delivery']); 
		$s_delivery = User::dataSanitize($_REQUEST['s_delivery']);
		$b_delivery = User::dataSanitize($_REQUEST['b_delivery']);
		$premium_price = User::dataSanitize($_REQUEST['premium_price']);
		$standard_price = User::dataSanitize($_REQUEST['standard_price']);
		$basic_price = User::dataSanitize($_REQUEST['basic_price']);
		$gigdesc = User::dataSanitize($_REQUEST['gigdesc']);
		$requirement = User::dataSanitize($_REQUEST['requirement']);
		if (isset($_REQUEST['gigimage'])) {
			$gigimage = User::dataSanitize($_REQUEST['gigimage']);
		}



		if (empty($gigtitle)) {
			
			$reg_err['gigtitle'] = "<span class='text-danger'>Gig Title field is required</span>";
		}


		if (empty($category_id)) {
			
			$reg_err['category'] = "<span class='text-danger'>Category field is required</span>";
		}

		

		if (empty($subcategory_id)) {
			
			$reg_err['subcategory'] = "<span class='text-danger'>Subcategory field is required</span>";
		}


		if (empty($languageid)) {
			
			$reg_err['language'] = "<span class='text-danger'>Language field is required</span>";
		}



		if (empty($p_plantitle)) {
			
			$reg_err['p_plantitle'] = "<span class='text-danger'>This field is required</span>";
		}

		if (empty($s_plantitle)) {
			
			$reg_err['s_plantitle'] = "<span class='text-danger'>This field is required</span>";
		}

		

		if (empty($b_plantitle)) {
			
			$reg_err['b_plantitle'] = "<span class='text-danger'>This field is required</span>";
		}

		// if (empty($p_plandesc)) {
			
		// 	$reg_err['p_plandesc'] = "<span class='text-danger'>This field is required</span>";
		// }

		// if (empty($s_plandesc)) {
			
		// 	$reg_err['s_plandesc'] = "<span class='text-danger'>This field is required</span>";
		// }

		// if (empty($b_plandesc)) {
		// 	$reg_err['b_plandesc'] = "<span class='text-danger'>This field is required</span>";
		// }

		if (empty($p_pages)) {
			$reg_err['p_pages'] = "<span class='text-danger'>This field is required</span>";
		}elseif ($p_pages < 1) {
			$reg_err['p_pages'] = "<span class='text-danger'>Pages is less than the expected number of pages.</span>";
		}

		if (empty($s_pages)) {
			$reg_err['s_pages'] = "<span class='text-danger'>This field is required</span>";
		}elseif ($s_pages < 1) {
			$reg_err['s_pages'] = "<span class='text-danger'>Pages is less than the expected number of pages.</span>";
		}

		if (empty($b_pages)) {
			$reg_err['b_pages'] = "<span class='text-danger'>This field is required</span>";
		}elseif ($b_pages < 1) {
			$reg_err['b_pages'] = "<span class='text-danger'>Pages is less than the expected number of pages.</span>";
		}

		if (empty($p_delivery)) {
			$reg_err['p_delivery'] = "<span class='text-danger'>This field is required</span>";
		}

		if (empty($s_delivery)) {
			$reg_err['s_delivery'] = "<span class='text-danger'>This field is required</span>";
		}

		if (empty($b_delivery)) {
			$reg_err['b_delivery'] = "<span class='text-danger'>This field is required</span>";
		}

		if (empty($premium_price)) {
			$reg_err['premium_price'] = "<span class='text-danger'>This field is required</span>";
		}elseif ($premium_price >500000 || $premium_price <= 500) {
			$reg_err['premium_price'] = "<span class='text-danger'>Amount is greater than or less than the required amount</span>";
		}

		if (empty($standard_price)) {
			$reg_err['standard_price'] = "<span class='text-danger'>This field is required</span>";
		}elseif ($standard_price >500000 || $standard_price <= 500) {
			$reg_err['standard_price'] = "<span class='text-danger'>Amount is greater than or less than the required amount</span>";
		}

		if (empty($basic_price)) {
			$reg_err['basic_price'] = "<span class='text-danger'>This field is required</span>";
		}elseif ($basic_price > 500000 || $basic_price <= 500) {
			$reg_err['basic_price'] = "<span class='text-danger'>Amount is greater than or less than the required amount</span>";
		}


		// if (empty($gigimage)) {
		// 	$reg_err['gigimage'] = "<span class='text-danger'>This field is required</span>";
		// } 


		if (count($reg_err) == 0) {
			

			$gigUploadobj= new Gigs;
			$mygig = $gigUploadobj->insertGig($gigtitle, $_SESSION['userid'], $p_plantitle, $s_plantitle, $b_plantitle, $p_plandesc, $s_plandesc, $b_plandesc, $p_CD, $s_CD, $b_CD, $p_RD, $s_RD, $b_RD, $p_SC, $s_SC, $b_SC, $p_pages, $s_pages, $b_pages, $p_numrev, $s_numrev, $b_numrev, $p_delivery, $s_delivery, $b_delivery, $premium_price, $standard_price, $basic_price, $requirement, $subcategory_id, $category_id, $gigdesc, $languageid);

			

		}


	//exit;
	
// 	echo "<pre>";
// 	print_r($_SESSION['userid'] );
// 	echo "</pre>";
	}


		 ?>

		
		<!-- Gig set up form section -->

		<div class="row" id="gigform">
			
			<div class="col-md" >
				<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?id=<?php echo $_GET['id']; ?>&name= <?php echo $_GET['name'];?>" enctype="multipart/form-data">
				<div class="row purplebg">
					<div class="col-md ">
						<h3>OVERVIEW</h3>
					</div>
				</div>

				<!-- gig title section -->

				<div class="row">
					<div class="col-md-2 marginTop"><h3>Gig Title</h3>
					</div>
					<div class="col-md marginTop"><textarea id="title_" class="form-control" placeholder="Title Here" name="gigtitle"><?php if (isset($_POST['gigtitle'])) {
							echo $_POST['gigtitle'];
						} ?></textarea>
					<span id="err_title"><?php if (isset($reg_err['gigtitle'])){echo $reg_err['gigtitle'];}?></span>
					</div>
				</div>

				<div class="row">
					<div class="col-md-2 marginTop"><h6 class="">Category</h6>
					</div>
					<div class="col-md">
						<select id="category" class="form-control marginTop" name="categoryid">
							<option value="">Select a Category</option>

							<!-- generating marketplace options from database -->
							<?php


						 	foreach ($category as $key => $value) {
						 			
						 			$categoryid = $value['marketplace_id'];
						 			$categoryname = $value['marketplace_name'];
						 		
						 ?>

						 <option <?php if(isset($_REQUEST['categoryid']) && $_REQUEST['categoryid'] == $categoryid  ){ echo "value='$categoryid' selected";
						  }else{echo "value='$categoryid'";}?> > <?php echo $categoryname; ?> </option>

						 <?php
						 }
						 ?>
						</select>
						<span id="err_cat"><?php if (isset($reg_err['category'])){echo $reg_err['category'];}?></span>
					</div>

					<div class="col-md">
						<select id="subcategory" class="form-control marginTop" name="subcategoryid">
							<option value="">Select a Subcategory</option>
							<!-- generating service options from database -->
							

						</select>
						<span id="err_subcat"><?php if (isset($reg_err['subcategory'])){echo $reg_err['subcategory'];}?></span>
					</div>


					<div class="col-md">


						<select id="language" class="form-control marginTop" name="languageid">
							<option value="">Select a Skill</option>
							<!-- generating service options from database -->
							<?php


						 	foreach ($language as $key => $value) {
						 			
						 			$language_id = $value['languageid'];
						 			$languagename = $value['language_title'];
						 		
						 ?>

						 <option <?php if(isset($_REQUEST['languageid']) && $_REQUEST['languageid'] == $language_id  ){ echo "value='$language_id' selected";
						  }else{echo "value='$language_id'";}?> > <?php echo $languagename; ?> </option>

						 <?php
						 }
						 ?>

						</select>
						<span id="err_lang"><?php if (isset($reg_err['language'])){echo $reg_err['language'];}?></span>
						
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

										<td><textarea id="premium" class="form-control marginTop" placeholder="Name your plan" name="p_plantitle"><?php if (isset($_POST['p_plantitle'])) {
												echo $_POST['p_plantitle'];
										} ?></textarea><span id="err_premium"><?php if (isset($reg_err['p_plantitle'])){echo $reg_err['p_plantitle'];}?></span></td>

										<td> <textarea id="standard" class="form-control marginTop" placeholder="Name your plan" name="s_plantitle"><?php if (isset($_POST['s_plantitle'])) {
												echo $_POST['s_plantitle'];
										} ?></textarea><span id="err_standard"><?php if (isset($reg_err['s_plantitle'])){echo $reg_err['s_plantitle'];}?></span></td>

										<td><textarea id="basic" class="form-control marginTop" placeholder="Name your plan" name="b_plantitle"><?php if (isset($_POST['b_plantitle'])) {
												echo $_POST['b_plantitle'];
										} ?></textarea><span id="err_basic"><?php if (isset($reg_err['b_plantitle'])){echo $reg_err['b_plantitle'];}?></span></td>
									</tr>

									<tr>
										<td></td>

										<td><textarea id="premium_offer" class="form-control marginTop" placeholder="Describe what you are offering in your plan" name="p_plandesc"><?php if (isset($_POST['p_plandesc'])) {
												echo $_POST['p_plandesc'];
										} ?></textarea><span id="err_premium1"><?php if (isset($reg_err['p_plandesc'])){echo $reg_err['p_plandesc'];}?></span></td>

										<td><textarea id="standard_offer" class="form-control marginTop" placeholder="Describe what you are offering in your plan" name="s_plandesc"><?php if (isset($_POST['s_plandesc'])) {
												echo $_POST['s_plandesc'];
										} ?></textarea><span id="err_standard1"><?php if (isset($reg_err['s_plandesc'])){echo $reg_err['s_plandesc'];}?></span></td>

										<td><textarea id="basic_offer" class="form-control marginTop" placeholder="Describe what you are offering in your basic plan" name="b_plandesc"><?php if (isset($_POST['b_plandesc'])) {
												echo $_POST['b_plandesc'];} ?></textarea><span id="err_basic1"><?php if (isset($reg_err['b_plandesc'])){echo $reg_err['b_plandesc'];}?></span></td>
									</tr>

									<tr>
										<td>Custom Design</td>
										<td class="my-textAlign"><input class="" type="checkbox" name="p_CD" <?php if(isset($_REQUEST['p_CD']) && $_REQUEST['p_CD'] == "1"  ){ echo "value='1' checked";
						  				}else{echo "value='1'";}?>></td>

										<td class="my-textAlign"><input class="" type="checkbox" name="s_CD" <?php if(isset($_REQUEST['s_CD']) && $_REQUEST['s_CD'] == "1"  ){ echo "value='1' checked";
						  				}else{echo "value='1'";}?>></td>

										<td class="my-textAlign"><input class="" type="checkbox" name="b_CD" <?php if(isset($_REQUEST['b_CD']) && $_REQUEST['b_CD'] == "1"  ){ echo "value='1' checked";
						  				}else{echo "value='1'";}?>></td>
									</tr>

									<tr>
										<td>Responsive Design</td>
										<td class="my-textAlign"><input class="" type="checkbox" name="p_RD" <?php if(isset($_REQUEST['p_RD']) && $_REQUEST['p_RD'] == "1"  ){ echo "value='1' checked";
						  				}else{echo "value='1'";}?>></td>

										<td class="my-textAlign"><input class="" type="checkbox" name="s_RD" <?php if(isset($_REQUEST['s_RD']) && $_REQUEST['s_RD'] == "1"  ){ echo "value='1' checked";
						  				}else{echo "value='1'";}?>></td>

										<td class="my-textAlign"><input class="" type="checkbox" name="b_RD" <?php if(isset($_REQUEST['b_RD']) && $_REQUEST['b_RD'] == "1"  ){ echo "value='1' checked";
						  				}else{echo "value='1'";}?>></td>
									</tr>

									<tr>
										<td>Include Source Code</td>
										<td class="my-textAlign"><input class="" type="checkbox" name="p_SC" <?php if(isset($_REQUEST['p_SC']) && $_REQUEST['p_SC'] == "1"  ){ echo "value='1' checked";
						  				}else{echo "value='1'";}?>></td>

										<td class="my-textAlign"><input class="" type="checkbox" name="s_SC" <?php if(isset($_REQUEST['s_SC']) && $_REQUEST['s_SC'] == "1"  ){ echo "value='1' checked";
						  				}else{echo "value='1'";}?>></td>

										<td class="my-textAlign"><input class="" type="checkbox" name="b_SC" <?php if(isset($_REQUEST['b_SC']) && $_REQUEST['b_SC'] == "1"  ){ echo "value='1' checked";
						  				}else{echo "value='1'";}?>></td>
									</tr>

									<tr>
										<td>Number of Pages</td>
										<td class="my-textAlign"><input class="form-control-sm" type="number" name="p_pages" value="<?php if(isset($_POST['p_pages'])){
										echo $_POST['p_pages'];} ?>"><span><?php if (isset($reg_err['p_pages'])){echo $reg_err['p_pages'];}?></span></td>

										<td class="my-textAlign"><input class="form-control-sm" type="number" name="s_pages" value="<?php if(isset($_POST['s_pages'])){
										echo $_POST['s_pages'];} ?>"><span><?php if (isset($reg_err['s_pages'])){echo $reg_err['s_pages'];}?></span></td>

										<td class="my-textAlign"><input class="form-control-sm" type="number" name="b_pages" value="<?php if(isset($_POST['b_pages'])){
										echo $_POST['b_pages'];} ?>"><span><?php if (isset($reg_err['b_pages'])){echo $reg_err['b_pages'];}?></span></td>
									</tr>

									<tr>
										<td>Number of Revisions</td>
										<td class="my-textAlign">
											<select class="form-control" name="p_numrev">
												<option <?php if(isset($_REQUEST['p_numrev']) && $_REQUEST['p_numrev'] == '0'  ){ echo "value='0' selected";
						 						 }else{echo "value='0'";}?>>0</option>

												<option <?php if(isset($_REQUEST['p_numrev']) && $_REQUEST['p_numrev'] == '1'  ){ echo "value='1' selected";
						 						 }else{echo "value='1'";}?>>1</option>

												<option <?php if(isset($_REQUEST['p_numrev']) && $_REQUEST['p_numrev'] == '2'  ){ echo "value='2' selected";
						 						 }else{echo "value='2'";}?>>2</option>

												<option <?php if(isset($_REQUEST['p_numrev']) && $_REQUEST['p_numrev'] == '3'  ){ echo "value='3' selected";
						 						 }else{echo "value='3'";}?>>3</option>

												<option <?php if(isset($_REQUEST['p_numrev']) && $_REQUEST['p_numrev'] == '4'  ){ echo "value='4' selected";
						 						 }else{echo "value='4'";}?>>4</option>

												<option <?php if(isset($_REQUEST['p_numrev']) && $_REQUEST['p_numrev'] == '5'  ){ echo "value='5' selected";
						 						 }else{echo "value='5'";}?>>5</option>

												<option <?php if(isset($_REQUEST['p_numrev']) && $_REQUEST['p_numrev'] == 'unlimited'  ){ echo "value='unlimited' selected";
						 						 }else{echo "value='unlimited'";}?>>Unlimited</option>
											</select>
										</td>
										<td class="my-textAlign">
											<select class="form-control" name="s_numrev">
												<option <?php if(isset($_REQUEST['s_numrev']) && $_REQUEST['s_numrev'] == '0'  ){ echo "value='0' selected";
						 						 }else{echo "value='0'";}?>>0</option>

												<option <?php if(isset($_REQUEST['s_numrev']) && $_REQUEST['s_numrev'] == '1'  ){ echo "value='1' selected";
						 						 }else{echo "value='1'";}?>>1</option>

												<option <?php if(isset($_REQUEST['s_numrev']) && $_REQUEST['s_numrev'] == '2'  ){ echo "value='2' selected";
						 						 }else{echo "value='2'";}?>>2</option>

												<option <?php if(isset($_REQUEST['s_numrev']) && $_REQUEST['s_numrev'] == '3'  ){ echo "value='3' selected";
						 						 }else{echo "value='3'";}?>>3</option>

												<option <?php if(isset($_REQUEST['s_numrev']) && $_REQUEST['s_numrev'] == '4'  ){ echo "value='4' selected";
						 						 }else{echo "value='4'";}?>>4</option>

												<option <?php if(isset($_REQUEST['s_numrev']) && $_REQUEST['s_numrev'] == '5'  ){ echo "value='5' selected";
						 						 }else{echo "value='5'";}?>>5</option>

												<option <?php if(isset($_REQUEST['s_numrev']) && $_REQUEST['s_numrev'] == 'unlimited'  ){ echo "value='unlimited' selected";
						 						 }else{echo "value='unlimited'";}?>>Unlimited</option>
											</select>
										</td>
										<td class="my-textAlign">
											<select class="form-control" name="b_numrev">
												<option <?php if(isset($_REQUEST['b_numrev']) && $_REQUEST['b_numrev'] == '0'  ){ echo "value='0' selected";
						 						 }else{echo "value='0'";}?>>0</option>

												<option <?php if(isset($_REQUEST['b_numrev']) && $_REQUEST['b_numrev'] == '1'  ){ echo "value='1' selected";
						 						 }else{echo "value='1'";}?>>1</option>

												<option <?php if(isset($_REQUEST['b_numrev']) && $_REQUEST['b_numrev'] == '2'  ){ echo "value='2' selected";
						 						 }else{echo "value='2'";}?>>2</option>

												<option <?php if(isset($_REQUEST['b_numrev']) && $_REQUEST['b_numrev'] == '3'  ){ echo "value='3' selected";
						 						 }else{echo "value='3'";}?>>3</option>

												<option <?php if(isset($_REQUEST['b_numrev']) && $_REQUEST['b_numrev'] == '4'  ){ echo "value='4' selected";
						 						 }else{echo "value='4'";}?>>4</option>

												<option <?php if(isset($_REQUEST['b_numrev']) && $_REQUEST['b_numrev'] == '5'  ){ echo "value='5' selected";
						 						 }else{echo "value='5'";}?>>5</option>

												<option <?php if(isset($_REQUEST['b_numrev']) && $_REQUEST['b_numrev'] == 'unlimited'  ){ echo "value='unlimited' selected";
						 						 }else{echo "value='unlimited'";}?>>Unlimited</option>
											</select>
										</td>
									</tr>

									<tr>
										<td>Delivery Time</td>
										<td class="my-textAlign">
											<select id="premium_time" class="form-control" name="p_delivery">
												<option value="">Select Days</option>
												<option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '1'  ){ echo "value='1' selected";
						  							}else{echo "value='1'";}?>>1 Day</option>

												<option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '2'  ){ echo "value='2' selected";
						  							}else{echo "value='2'";}?>>2 Days</option>

												<option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '3'  ){ echo "value='3' selected";
						  							}else{echo "value='3'";}?>>3 Days</option>

												<option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '4'  ){ echo "value='4 ' selected";
						  							}else{echo "value='4'";}?>value="4">4 Days</option>

												<option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '5'  ){ echo "value='5' selected";
						  							}else{echo "value='5'";}?>>5 Days</option>

												<option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '6'  ){ echo "value='6' selected";
						  							}else{echo "value='6'";}?>>6 Days</option>

												<option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '7'  ){ echo "value='7' selected";
						  							}else{echo "value='7'";}?>>7 Days</option>

												<option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '8'  ){ echo "value='' selected";
						  							}else{echo "value='8'";}?>>8 Days</option>

												<option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '9'  ){ echo "value='9' selected";
						  							}else{echo "value='9'";}?>>9 Days</option>

												<option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '10'  ){ echo "value='10' selected";
						  							}else{echo "value='10'";}?>>10 Days</option>

												<option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '11'  ){ echo "value='11' selected";
						  							}else{echo "value='11'";}?>>11 Days</option>

												<option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '12'  ){ echo "value='12' selected";
						  							}else{echo "value='12'";}?>>12 Days</option>

												<option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '13'  ){ echo "value='13' selected";
						  							}else{echo "value='13'";}?>>13 Days</option>

												<option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '14'  ){ echo "value='14' selected";
						  							}else{echo "value='14'";}?>>14 Days</option>

												<option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '15'  ){ echo "value='15' selected";
						  							}else{echo "value='15'";}?>>15 Days</option>

												<option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '16'  ){ echo "value='16' selected";
						  							}else{echo "value='16'";}?>>16 Days</option>

												<option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '17'  ){ echo "value='17' selected";
						  							}else{echo "value='17'";}?>>17 Days</option>

												<option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '18'  ){ echo "value='18' selected";
						  							}else{echo "value='18'";}?>>18 Days</option>

												<option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '19'  ){ echo "value='19' selected";
						  							}else{echo "value='19'";}?>>19 Days</option>

												<option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '20'  ){ echo "value='20' selected";
						  							}else{echo "value='20'";}?>>20 Days</option>

												<option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '30'  ){ echo "value='30' selected";
						  							}else{echo "value='30'";}?>>30 Days</option>

												<option <?php if(isset($_REQUEST['p_delivery']) && $_REQUEST['p_delivery'] == '60'  ){ echo "value='60' selected";
						  							}else{echo "value='60'";}?>>2 Months</option>
											</select>
											<span id="err_time1"><?php if (isset($reg_err['p_delivery'])){echo $reg_err['p_delivery'];}?></span>
										</td>

										<td class="my-textAlign">
											<select id="standard_time" class="form-control" name="s_delivery">
												<option value="">Select Days</option>
												<option <?php if(isset($_REQUEST['s_delivery']) && $_REQUEST['s_delivery'] == '1'  ){ echo "value='1' selected";
						  							}else{echo "value='1'";}?>>1 Day</option>

												<option <?php if(isset($_REQUEST['s_delivery']) && $_REQUEST['s_delivery'] == '2'  ){ echo "value='2' selected";
						  							}else{echo "value='2'";}?>>2 Days</option>

												<option <?php if(isset($_REQUEST['s_delivery']) && $_REQUEST['s_delivery'] == '3'  ){ echo "value='3' selected";
						  							}else{echo "value='3'";}?>>3 Days</option>

												<option <?php if(isset($_REQUEST['s_delivery']) && $_REQUEST['s_delivery'] == '4'  ){ echo "value='4 ' selected";
						  							}else{echo "value='4'";}?>value="4">4 Days</option>

												<option <?php if(isset($_REQUEST['s_delivery']) && $_REQUEST['s_delivery'] == '5'  ){ echo "value='5' selected";
						  							}else{echo "value='5'";}?>>5 Days</option>

												<option <?php if(isset($_REQUEST['s_delivery']) && $_REQUEST['s_delivery'] == '6'  ){ echo "value='6' selected";
						  							}else{echo "value='6'";}?>>6 Days</option>

												<option <?php if(isset($_REQUEST['s_delivery']) && $_REQUEST['s_delivery'] == '7'  ){ echo "value='7' selected";
						  							}else{echo "value='7'";}?>>7 Days</option>

												<option <?php if(isset($_REQUEST['s_delivery']) && $_REQUEST['s_delivery'] == '8'  ){ echo "value='' selected";
						  							}else{echo "value='8'";}?>>8 Days</option>

												<option <?php if(isset($_REQUEST['s_delivery']) && $_REQUEST['s_delivery'] == '9'  ){ echo "value='9' selected";
						  							}else{echo "value='9'";}?>>9 Days</option>

												<option <?php if(isset($_REQUEST['s_delivery']) && $_REQUEST['s_delivery'] == '10'  ){ echo "value='10' selected";
						  							}else{echo "value='10'";}?>>10 Days</option>

												<option <?php if(isset($_REQUEST['s_delivery']) && $_REQUEST['s_delivery'] == '11'  ){ echo "value='11' selected";
						  							}else{echo "value='11'";}?>>11 Days</option>

												<option <?php if(isset($_REQUEST['s_delivery']) && $_REQUEST['s_delivery'] == '12'  ){ echo "value='12' selected";
						  							}else{echo "value='12'";}?>>12 Days</option>

												<option <?php if(isset($_REQUEST['s_delivery']) && $_REQUEST['s_delivery'] == '13'  ){ echo "value='13' selected";
						  							}else{echo "value='13'";}?>>13 Days</option>

												<option <?php if(isset($_REQUEST['s_delivery']) && $_REQUEST['s_delivery'] == '14'  ){ echo "value='14' selected";
						  							}else{echo "value='14'";}?>>14 Days</option>

												<option <?php if(isset($_REQUEST['s_delivery']) && $_REQUEST['s_delivery'] == '15'  ){ echo "value='15' selected";
						  							}else{echo "value='15'";}?>>15 Days</option>

												<option <?php if(isset($_REQUEST['s_delivery']) && $_REQUEST['s_delivery'] == '16'  ){ echo "value='16' selected";
						  							}else{echo "value='16'";}?>>16 Days</option>

												<option <?php if(isset($_REQUEST['s_delivery']) && $_REQUEST['s_delivery'] == '17'  ){ echo "value='17' selected";
						  							}else{echo "value='17'";}?>>17 Days</option>

												<option <?php if(isset($_REQUEST['s_delivery']) && $_REQUEST['s_delivery'] == '18'  ){ echo "value='18' selected";
						  							}else{echo "value='18'";}?>>18 Days</option>

												<option <?php if(isset($_REQUEST['s_delivery']) && $_REQUEST['s_delivery'] == '19'  ){ echo "value='19' selected";
						  							}else{echo "value='19'";}?>>19 Days</option>

												<option <?php if(isset($_REQUEST['s_delivery']) && $_REQUEST['s_delivery'] == '20'  ){ echo "value='20' selected";
						  							}else{echo "value='20'";}?>>20 Days</option>

												<option <?php if(isset($_REQUEST['s_delivery']) && $_REQUEST['s_delivery'] == '30'  ){ echo "value='30' selected";
						  							}else{echo "value='30'";}?>>30 Days</option>

												<option <?php if(isset($_REQUEST['s_delivery']) && $_REQUEST['s_delivery'] == '60'  ){ echo "value='60' selected";
						  							}else{echo "value='60'";}?>>2 Months</option>
											</select>
											<span id="err_time2"><?php if (isset($reg_err['s_delivery'])){echo $reg_err['s_delivery'];}?></span>
										</td>



										<td class="my-textAlign">
											<select id="basic_time" class="form-control" name="b_delivery">
												<option value="">Select Days</option>
												<option <?php if(isset($_REQUEST['b_delivery']) && $_REQUEST['b_delivery'] == '1'  ){ echo "value='1' selected";
						  							}else{echo "value='1'";}?>>1 Day</option>

												<option <?php if(isset($_REQUEST['b_delivery']) && $_REQUEST['b_delivery'] == '2'  ){ echo "value='2' selected";
						  							}else{echo "value='2'";}?>>2 Days</option>

												<option <?php if(isset($_REQUEST['b_delivery']) && $_REQUEST['b_delivery'] == '3'  ){ echo "value='3' selected";
						  							}else{echo "value='3'";}?>>3 Days</option>

												<option <?php if(isset($_REQUEST['b_delivery']) && $_REQUEST['b_delivery'] == '4'  ){ echo "value='4 ' selected";
						  							}else{echo "value='4'";}?>value="4">4 Days</option>

												<option <?php if(isset($_REQUEST['b_delivery']) && $_REQUEST['b_delivery'] == '5'  ){ echo "value='5' selected";
						  							}else{echo "value='5'";}?>>5 Days</option>

												<option <?php if(isset($_REQUEST['b_delivery']) && $_REQUEST['b_delivery'] == '6'  ){ echo "value='6' selected";
						  							}else{echo "value='6'";}?>>6 Days</option>

												<option <?php if(isset($_REQUEST['b_delivery']) && $_REQUEST['b_delivery'] == '7'  ){ echo "value='7' selected";
						  							}else{echo "value='7'";}?>>7 Days</option>

												<option <?php if(isset($_REQUEST['b_delivery']) && $_REQUEST['b_delivery'] == '8'  ){ echo "value='' selected";
						  							}else{echo "value='8'";}?>>8 Days</option>

												<option <?php if(isset($_REQUEST['b_delivery']) && $_REQUEST['b_delivery'] == '9'  ){ echo "value='9' selected";
						  							}else{echo "value='9'";}?>>9 Days</option>

												<option <?php if(isset($_REQUEST['b_delivery']) && $_REQUEST['b_delivery'] == '10'  ){ echo "value='10' selected";
						  							}else{echo "value='10'";}?>>10 Days</option>

												<option <?php if(isset($_REQUEST['b_delivery']) && $_REQUEST['b_delivery'] == '11'  ){ echo "value='11' selected";
						  							}else{echo "value='11'";}?>>11 Days</option>

												<option <?php if(isset($_REQUEST['b_delivery']) && $_REQUEST['b_delivery'] == '12'  ){ echo "value='12' selected";
						  							}else{echo "value='12'";}?>>12 Days</option>

												<option <?php if(isset($_REQUEST['b_delivery']) && $_REQUEST['b_delivery'] == '13'  ){ echo "value='13' selected";
						  							}else{echo "value='13'";}?>>13 Days</option>

												<option <?php if(isset($_REQUEST['b_delivery']) && $_REQUEST['b_delivery'] == '14'  ){ echo "value='14' selected";
						  							}else{echo "value='14'";}?>>14 Days</option>

												<option <?php if(isset($_REQUEST['b_delivery']) && $_REQUEST['b_delivery'] == '15'  ){ echo "value='15' selected";
						  							}else{echo "value='15'";}?>>15 Days</option>

												<option <?php if(isset($_REQUEST['b_delivery']) && $_REQUEST['b_delivery'] == '16'  ){ echo "value='16' selected";
						  							}else{echo "value='16'";}?>>16 Days</option>

												<option <?php if(isset($_REQUEST['b_delivery']) && $_REQUEST['b_delivery'] == '17'  ){ echo "value='17' selected";
						  							}else{echo "value='17'";}?>>17 Days</option>

												<option <?php if(isset($_REQUEST['b_delivery']) && $_REQUEST['b_delivery'] == '18'  ){ echo "value='18' selected";
						  							}else{echo "value='18'";}?>>18 Days</option>

												<option <?php if(isset($_REQUEST['b_delivery']) && $_REQUEST['b_delivery'] == '19'  ){ echo "value='19' selected";
						  							}else{echo "value='19'";}?>>19 Days</option>

												<option <?php if(isset($_REQUEST['b_delivery']) && $_REQUEST['b_delivery'] == '20'  ){ echo "value='20' selected";
						  							}else{echo "value='20'";}?>>20 Days</option>

												<option <?php if(isset($_REQUEST['b_delivery']) && $_REQUEST['b_delivery'] == '30'  ){ echo "value='30' selected";
						  							}else{echo "value='30'";}?>>30 Days</option>

												<option <?php if(isset($_REQUEST['b_delivery']) && $_REQUEST['b_delivery'] == '60'  ){ echo "value='60' selected";
						  							}else{echo "value='60'";}?>>2 Months</option>
											</select>
											<span id="err_time3"><?php if (isset($reg_err['b_delivery'])){echo $reg_err['b_delivery'];}?></span>
										</td>
									</tr>

									<tr>
										
										<td>Price</td>
										<td class="my-textAlign"><input name="premium_price" class="form-control-sm" type="text" placeholder="Max of &#8358;500,000" value="<?php if(isset($_POST['premium_price'])){
										echo $_POST['premium_price'];} ?>">
										
										<span id="err_price1"><?php if (isset($reg_err['premium_price'])){echo $reg_err['premium_price'];}?></span></td>

										<td class="my-textAlign"><input name="standard_price" class="form-control-sm" type="text" placeholder="Max of &#8358;500,000" value="<?php if(isset($_POST['standard_price'])){
										echo $_POST['standard_price'];} ?>">

										<span id="err_price2"><?php if (isset($reg_err['standard_price'])){echo $reg_err['standard_price'];}?></span>
										</td>

										<td class="my-textAlign"><input name="basic_price" class="form-control-sm" placeholder="Max of &#8358;500,000" type="text" value="<?php if(isset($_POST['basic_price'])){
										echo $_POST['basic_price'];} ?>">

										<span id="err_price3"><?php if (isset($reg_err['basic_price'])){echo $reg_err['basic_price'];}?></span>
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

				<div class="col-md marginTop"><textarea id="about_" class="form-control" placeholder="Write something captivating about your gig" name="gigdesc"><?php if (isset($_POST['gigdesc'])) {
							echo $_POST['gigdesc'];
						} ?></textarea>

					<span id="err_gigdesc"><?php if (isset($reg_err['gigdesc'])){echo $reg_err['gigdesc'];}?></span>
					</div>

				<div class="row">
					<div class="col-md-3 marginTop"><h3>Requirements</h3></div>
					<div class="col-md marginTop">
						<span class="myBold">REQUIREMENT <span class="badge purplebg">#1</span></span>

						<textarea class="form-control" placeholder="Tell your client what you need to get started." name="requirement"><?php if (isset($_POST['requirement'])) {
							echo $_POST['requirement'];
						} ?></textarea>

						<!-- <a href="#" class="purpletext"><i class="fa fa-plus"></i> Add another requirement</a> --></div>
				</div>

				<div class="row purplebg marginTop">
					<div class="col-md ">
						<h3>GIG IMAGE</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-md">
						<h4>Build your Gig gallery</h4>
					</div>
				</div>

				<div class="row ">
					<div class="col-md-2">
						<label>Add Gig Image</label>				
					</div>

					<div class="col-md">
						<input type="file" class="form-control" name="gigimage" placeholder="" value="<?php if(isset($_POST['gigimage'])){
							echo $_POST['gigimage'];} ?>">
						<span id="err_gigimage"><?php if (isset($reg_err['gigimage'])){echo $reg_err['gigimage'];}?></span>			
					</div>

					
				</div>

				<div class="row marginTop">
					<div class="col-md">
						<button id="gig_create_btn" type="submit" class="btn join-button">Continue</button>
					</div>
				</div>
			</form>
			</div>
			
		</div>



	<!-- Footer Section -->

	<?php
		include_once ('footer.php');
	?>
