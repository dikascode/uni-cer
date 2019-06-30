<?php
	
	include_once('uni_Class.php');

	//create product class object

	$prdobj = new Order();

	$prdobj->orderTrans($_GET['gigid'], $_GET['sellerid'], $_GET['buyerid'], $_GET['price'], $_GET['orderdesc'], $_GET['transref'], $_GET['status'], $_GET['ordertime']);

	// $_GET['ordertime'],

?>