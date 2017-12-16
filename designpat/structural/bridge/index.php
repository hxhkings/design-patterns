<?php
	
	require_once('transmitter.php');
	require_once('device.php');
	require_once('phone.php');
	require_once('tablet.php');

	require_once('messenger.php');
	require_once('instantmessenger.php');
	require_once('sms.php');

	$phone = new Phone();
	$phone->setSender(new SMS());
	$phone->send("Hello Moussey!");



?>