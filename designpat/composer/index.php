<?php
	require("vendor/autoload.php");

	$book = new \IcyApril\ChapterOne\Book;
	//echo $book->name;
	$book = new \IcyApril\ChapterTwo\Book2;

	$notebook = new \Hxhking\Properties\Notebook;
	echo "<pre>";
	echo "<strong>" . $notebook->__construct() . "</strong>";
	echo "</pre>";
?>