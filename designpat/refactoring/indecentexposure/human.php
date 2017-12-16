<?php

	// Indecent Exposure
	/**
	 * class Human
	 * {
	 *	 public $name;
	 *	 public $dateOfBirth;
	 *	 public $height;
	 *	 public $weight;
	 * }
	 */


	// Use encapsulation to hide the data

	class Human
	{
		private $name;
		private $dateOfBirth;
	 	private $height;
		private $weight;

		public function __construct(string $name, string $dateOfBirth)
		{
			$this->name = $name;
			$this->dateOfBirth = $dateOfBirth;
		}

		public function setWeight(double $weight)
		{
			$this->weight = $weight;
		}

		public function getWeight(): double
		{
			return $this->weight;
		}

		public function setHeight(double $height)
		{
			$this->height = $height;
		}

		public function getHeight(): double 
		{
			return $this->height;
		}
	}

	// Exposes a code smell of feature envy


?>