<?php

	
	require_once('manufacturer.php');
	require_once('post.php');
	require_once('sms.php');
	require_once('toyfactory.php');

	$childrensToyFactory = new ToyShop('1 Factory Lane, Oxfordshire', '07999999999', 5);
	$childrensToyFactory->processOrder('8 Midsummer Boulevard', '09199999999');


?>