<?php

	// Behavioral Design Pattern 

	require_once('purchaser.php');
	require_once('associatepurchaser.php');
	require_once('managerpurchaser.php');
	require_once('directorpurchaser.php');
	require_once('boardpurchaser.php');

	$associate = new AssociatePurchaser();

	$associate->buy(50);
	$manager = new ManagerPurchaser();
	$director = new DirectorPurchaser();
	$board = new BoardPurchaser();

	$associate->setNextPurchaser($manager);
	$manager->setNextPurchaser($director);
	$director->setNextPurchaser($board);

	$associate->buy(11000);

	$associate->buy(1000);

?>