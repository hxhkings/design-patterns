<?php


	require_once('insurance.php');

	$quote = new Insurance(10000, 250);
	echo $quote->monthlyPremium();
	echo "\n";

	require_once('marketcompare.php');
	require_once('insurancemarketcompare.php');

	$quote = new InsuranceMarketCompare(10000, 250);
	echo $quote->getMonthlyPremium();
	echo "\n";
	echo $quote->getAnnualPremium();




?>