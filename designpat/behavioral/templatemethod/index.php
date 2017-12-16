<?php 
	

	// Behavioral Design Pattern

	require_once('pasta.php');
	require_once('meatballpasta.php');

	var_dump('Meatball Pasta');
	$dish = new MeatBallPasta(true);
	$dish->cook();

	var_dump("");
	var_dump("Vegan Pasta");
	require_once('veganpasta.php');

	$dish = new VeganPasta(true);
	$dish->cook();


?>