<?php


	class Salary
	{
		private $employee;

		public function __construct(Employee $employee)
		{
			$this->employee = $employee;
		}

		public function calculate(float $sales): float 
		{
			$base = $this->employee->getBaseSalary();
			$commission = $this->employee->getCommission() * $sales;
			$deduction = $base * $this->employee->getPension();

			return $commission + $base - $deduction;
		}
	}



?>