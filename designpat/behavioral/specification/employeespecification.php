<?php


	interface EmployeeSpecification
	{
		public function isSatisfiedBy(StdClass $customer): bool;
	}


?>