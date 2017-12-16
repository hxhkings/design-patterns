<?php


	require_once('php3.php');
	require_once('notifierfactory.php');

	require_once('sms.php');

	$mobile = NotifierFactory::getNotifier("SMS", "07111111111");
	echo $mobile->sendNotification();


	require_once('email.php');
	$email = NotifierFactory::getNotifier("Email", "test@example.com");
	echo $email->sendNotification();

?>