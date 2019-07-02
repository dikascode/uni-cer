<?php
	
		include_once ('uni_Class.php');
?>

<!-- Menu/Header bar 3 -->
<!DOCTYPE html>
<html>
<head lang="en">
	<title>Unilancer</title>
	<meta charset="UTF-8" >
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


		<!-- font awesome link fonts -->
	<link href="fa/css/all.css" rel="stylesheet">

	<!-- google fonts -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Anton|Josefin+Sans|Monoton|PT+Sans+Narrow|Righteous|Teko" rel="stylesheet"> -->
	
	
	
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">


	<!-- jquery css animate -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">

	<link href="css/unilancer.css" rel="stylesheet" type="text/css">





	
	
	
</head>


<body>
	<div id="container" class="container-fluid">


		<div id="header" class="row menu-bar">
			<div class="col-md-2 d-flex justifyForMe">
				<a href="index.php"><h2 style="margin-top: 10px; color: #4B0082">UNILANCER</h2></a>
			</div>

			<div class="col-md-4">
				<nav class="navbar navbar-light" >
				  <form class="form-inline">
				    <input autocomplete="off" id="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				    <button class="btn btn-outline-light my-2 my-sm-0" type="submit" style="background-color: #4B0082; color:white">Search</button>
				  </form>
				</nav>
				<div id="displaySearch" style="border: width: 220px; height: 50px; position: absolute; top:50px; z-index: 10;"></div>
				</nav>
			</div>

			<div class="col-md-3">
				<ul id="menulist"  style="margin-top: 5%;">
					<!-- <li><a href="#">Dashboard</a></li> -->
													<!-- Something hidden here -->
					<li><a href="#">Messages <span class="badge purplebg">3</span></a></li>
					<li><a href="#">Orders</a></li>
					<!-- <li><a href="#">Gigs</a></li>
					<li><a href="#">Earnings</a></li> -->
				</ul>
			</div>

			<div class="col-md-2">
				<a href="#"><h5 class="purpletext" style="margin-top: 10px;">Switch to Buying</h5></a>
			</div>

			<div class="col-md">
				<a href="#"><img style="margin-top: 10px;" class="img-fluid rounded-circle" src="images/a.jpg" width="50"></a>
			</div>
		</div>