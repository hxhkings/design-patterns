<?php

	namespace Toys;

	class SFPuzzleToy extends MazeToy
	{
		private $size;
		private $pictureName;

		public function __construct()
		{
			$rand = rand(1, 3);

			switch($rand)
			{
				case 1:
					return $this->size = 3;
					break;
				case 2:
					return $this->size = 6;
					break;
				case 3:
					return $this->size = 9;
					break;
			}

			$this->pictureName = "San Francisco Puzzle";
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