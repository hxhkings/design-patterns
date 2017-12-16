<?php

	require_once("toyfactory.php");
	require_once("toy.php");
	require_once("mazetoy.php");
	require_once("puzzletoy.php");

	require_once("sftoyfactory.php");
	require_once("sfmazetoy.php");
	require_once("sfpuzzletoy.php");

	$sanFranciscoFactory = new SFToyFactory();
	var_dump($sanFranciscoFactory->makeMaze());
	echo "\n";
	var_dump($sanFranciscoFactory->makePuzzle());
	echo "\n";

	require_once("uktoyfactory.php");
	require_once("ukmazetoy.php");
	require_once("ukpuzzletoy.php");

	$britishToyFactory = new UKToyFactory();
	var_dump($britishToyFactory->makeMaze());
	echo "\n";
	var_dump($britishToyFactory->makePuzzle());
	echo "\n";
?>