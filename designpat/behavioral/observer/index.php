<?php

	require_once('feed.php');
	require_once('reader.php');

	$newspaper = new Feed('hxhRonie.com');

	$allen = new Reader('Mark');
	$jim = new Reader('Lily');
	$linda = new Reader('Caithlyn');

	// add reader
	$newspaper->attach($allen);
	$newspaper->attach($jim);
	$newspaper->attach($linda);

	// remove reader
	$newspaper->detach($linda);


	// set break out news
	$newspaper->breakOutNews('PHP Design Patterns');
?>