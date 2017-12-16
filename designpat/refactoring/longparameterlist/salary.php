<?php

	
	class Salary
	{
		private $baseSalary;
		private $commission = 0;
		private $pension = 0;

		public function __construct (float $baseSalary, float $commission, float $pension)
		{
			$this->baseSalary = $baseSalary;
			$this->commission = $commission;
			$this->pension = $pension;
		}

		public function calculate (float $sales): float 
		{
			$base = $this->baseSalary;
			$commission = $this->commission * $sales;
			$deduction = $base * $this->pension;

			return $commission + $base - $deduction;
		}
	}

	// Long parameter list, use builder pattern

	// Note*: In case of duplicate codes, use template method pattern



?>