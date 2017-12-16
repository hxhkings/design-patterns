<?php

	namespace Toys;

	class UKPuzzleToy extends MazeToy
	{
		private $size;
		private $pictureName;

		public function __construct()
		{
			$rand = rand(1, 2);

			switch($rand)
			{
				case 1:
					return $this->size = 3;
					break;
				case 2:
					return $this->size = 9;
					break;
			}

			$this->pictureName = "London Puzzle";
		}

		public function getSize(): int
		{
			return $this->size;
		}

		public function getPictureName(): string 
		{
			return $this->pictureName;
		}
	}


?>