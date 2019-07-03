<?php
	session_start();
	if ($_SESSION['usertype'] == '2') {
		include_once('header2.php');
	 }else{

	 	header("Location: http://localhost/6thprojectphp/signin.php");
	 }

	
	echo "<p class='alert alert-info'>Thank you for your response.</p>";

// Return to <a href='newuser.php'>Profile</a>

?>