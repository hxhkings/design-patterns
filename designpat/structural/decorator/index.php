<?php


	require_once('book.php');
	require_once('ebook.php');
	$PHPBook = new EBook("Mastering PHP Design Patterns", "Junade Ali", 
				"Some Contents.");

	require_once('printbook.php');
	$PHPBook = new PrintBook("Mastering PHP Design Patterns", "Junade Ali", 
				"Some Contents.");

	echo $PHPBook->getText();




?>