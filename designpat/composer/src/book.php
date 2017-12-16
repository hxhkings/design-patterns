<?php
	namespace IcyApril\ChapterOne;

	class Book
	{
		public $name = "Moussey ";
		public $family = "Horca ";
		public function __construct()
		{
			echo __METHOD__ . "=>";
		}
	}

?>