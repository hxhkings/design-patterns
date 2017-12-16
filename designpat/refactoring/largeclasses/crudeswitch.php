<?php
	require_once('output.php');
	$client = 'Serial';

	switch ($client){
		case 'Serial':
			$client = new Serial();
			break;
		case 'JSON':
			$client = new JSON();
			break;
		case 'XML':
			$client = new XML();
			break;
	}

	echo $client->load(array(1, 2)) . '<br>';

	require_once('outputclient.php');

	$client = new OutputClient(new Serial());
	echo $client->loadOutput(array(1, 2, 3));

?>