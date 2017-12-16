<?php

	require_once('power.php');
	require_once('square.php');
	require_once('cube.php');
	require_once('raisenumber.php');

	$processor = new RaiseNumber(new Cube());

	var_dump($processor->raise(5));




?>