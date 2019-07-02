<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<?php

session_start();

if ($_SESSION['usertype'] == '1') {
		//include_once('header2.php');

		$dashboard = "<a href='newuser.php'>Dashboard</a>";
	echo "<div class='alert alert-success'>Congratulations, you have successfully uploaded your gig. Now let's make some income. Redirect to your dashboard ".$dashboard."</div>" ;

	 }else{

	 	//include_once('buyer_header.php');
	 	$dashboard = "<a href='buyerpage.php'>Dashboard</a>";
	echo "<div class='alert alert-success'>Congratulations, you have successfully uploaded your gig. Now let's make some income. Redirect to your dashboard ".$dashboard."</div>" ;
	 }

?>