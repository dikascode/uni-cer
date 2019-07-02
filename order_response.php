<?php
	session_start();
	if ($_SESSION['usertype'] == '1') {
		include_once('header2.php');
	 }else{

	 	include_once('buyer_header.php');
	 }

	
	echo "<p class='alert alert-info'>Thank you for your response.</p>";

// Return to <a href='newuser.php'>Profile</a>

?>