<?php
	
	include_once ('uni_Class.php');

	session_start();

	
	// if (isset($_REQUEST['search'])) {
	// 	$_REQUEST['search'] = $_GET['string'];
	// } 



	if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_REQUEST['searchbtn'] == 'Search' ) {
	   
	   $string = user::dataSanitize($_REQUEST['search']);

	   if (strlen($string) > 0) {
	   		
	   		$_SESSION['searchword'] = $string;
	   		header("Location: http://localhost/6thprojectphp/searchresult.php?"."string=".$_SESSION['searchword']);
			exit;


	   }else{

	   	header("Location: http://localhost/6thprojectphp/searchresult.php");
	   	exit;


	   }

	   
	   
	}


?>

<!-- header1 with search bar for my unilancer project
 -->
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
<div id="header" class="row menubar menu-bar" style="background-color: white;">

			<div class="col-md-2" style="font-size: 30px; color:#4B0082; font-weight: bold; margin-right: 5%;"><a href="index.php">UNILANCER</a></div>
			<div class="col-md-5">
				<nav class="navbar navbar-light" style="display:">

				  <form class="form-inline" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>">
				    <input autocomplete="off" id="search" name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				    <input value="Search" name="searchbtn" class="btn btn-outline-light my-2 my-sm-0" type="submit" style="background-color: #4B0082; color:white">
				  </form>

				</nav>
				<div id="displaySearch" style="border: width: 220px; height: 50px; position: absolute; top:50px; z-index: 10;"></div>
			</div>

			<div class="col-md" id="menubar">
				
				<nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
				
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="fullregisteration.php">Be a Seller <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link sigin_link" href="signin.php">Sign In</a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Dropdown
				        </a>
				        <div id="dropdown" class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Action</a>
				          <a class="dropdown-item" href="#">Another action</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="#">Something else here</a>
				        </div>
				      </li>
				     
				    </ul>
				   <a href="fullregisteration.php"><input class="btn purplebg" type="submit" value=" Join "></a>
				  </div>
				</nav>

			</div>
			
			
		</div>

		<!-- second menu bar -->
		
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

