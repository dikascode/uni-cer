

<?php
	
		include_once ('uni_Class.php');
		session_start();

?>
<!DOCTYPE html>
<html>
<head lang="en">
	<title>Unilancer</title>
	<meta charset="UTF-8" >
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


		<!-- font awesome link fonts -->
	<link href="fa/css/all.css" rel="stylesheet">

	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Anton|Josefin+Sans|Monoton|PT+Sans+Narrow|Righteous|Teko" rel="stylesheet">
	
	
	
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">


	<!-- jquery css animate -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">

	<link href="css/unilancer.css" rel="stylesheet" type="text/css">





	
	
	
</head>



<body>
	<div id="container" class="container-fluid">
<!-- header without search bar but with message n profile picture -->

<div id="header" class="row menu-bar">
			<div class="col-md-2 d-flex justifyForMe">
				<a href="index.php"><h2 style="margin-top: 10px; color: #4B0082">UNILANCER</h2></a>
			</div>

			<div class="col-md-5">
				<ul id="menulist"  style="margin-top: 2%;">
					<li><a href="buyerpage.php">Dashboard</a></li>
					<li><a href="#">Messages <span class="badge badge-primary">3</span></a></li>
					<li><a href="#">Orders</a></li>
					<li><a href="#">Expense Report</a></li>
				</ul>
			</div>

			<div class="col-md-5">

				<div class="btn-group dropleft" style="float: right;">
					<a href="fullregisteration.php" class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

						<?php

								if(empty($_SESSION['photo'])){if ($_SESSION['gender'] == 'Male') {
									
							?>

								<img class="img-fluid rounded-circle" style="width: 40px; height: 40px; margin-top: 10px" src="images/male-user.png" >

							<?php
							}else{
							?>
								<img class="img-fluid rounded-circle" style="width: 40px; height: 40px; margin-top: 10px" src="images/woman-avatar.png" >	

							<?php
								}

							}else{
							?>

								<img class="img-fluid rounded-circle" style="width: 40px; height: 40px; margin-top: 10px" src="<?php echo $_SESSION['photo']?>" >

							<?php
							}
							?>
					 <!--  <button type="button" class="btn btn-danger " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Action
					  </button> -->
					  <div class="dropdown-menu">
					    <a class="dropdown-item" href="userpage.php">My Profile</a>
					    <a class="dropdown-item" href="settings.php">Settings</a>
					    <a class="dropdown-item purpletext" href="#">Refer & get N5000</a>
					    <div class="dropdown-divider"></div>
					    <a class="dropdown-item" href="logout.php">Logout</a>
					  </div>
				</div>

				
				<div style="clear: both;"></div>
			</div>
		</div>