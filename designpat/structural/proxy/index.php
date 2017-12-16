<?php

	require_once('animalfeeder.php');
	require_once('animalfeederproxy.php');

	require_once('cat.php');
	$felix = new \IcyApril\PetShop\AnimalFeederProxy('Cat', 'Felix');
	echo $felix->displayFood(1);
	echo "\n<br>";
	echo $felix->dropFood(1, true);
	echo "<br>";

	require_once('dog.php');
	$brian = new \IcyApril\PetShop\AnimalFeederProxy('Dog', 'Brian');
	echo $brian->displayFood(1);
	echo "\n<br>";
	echo $brian->dropFood(1, true);



?>