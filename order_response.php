<?php
			session_start();
			if (!isset($_SESSION['userid'])) {	
		
	
			 	header("Location: http://localhost/6thprojectphp/signin.php");
			 }else{
				if ($_SESSION['usertype'] == '1') {
						include_once('header2.php');
					 }else{

					 	include_once('buyer_header.php');
					 }
			 }
	
	echo "<p class='alert alert-info'>Thank you for your response.</p>";

// Return to <a href='newuser.php'>Profile</a>

?>