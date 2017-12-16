<?php


	require_once('php3.php');
	require_once('notifierfactory.php');

	require_once('sms.php');

	$mobile = ElectronicNotifierFactory::getNotifier("SMS", "07111111111");
	echo $mobile->sendNotification();

	echo "\n";

	require_once('email.php');
	$email = ElectronicNotifierFactory::getNotifier("Email", "test@example.com");
	echo $email->sendNotification();

	echo "\n";

	require_once("couriernotifierfactory.php");
	require_once("post.php");

	$post = CourierNotifierFactory::getNotifier("Post", "10 Downing Street, SW1A 2AA");
	echo $post->sendNotification();


?>