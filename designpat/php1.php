<?php
	
	declare(strict_types=1);

	abstract class Animal
	{
		abstract public function eat (string $food) : bool;
		abstract public function talk (bool $shout) : string;
		public function walk (int $speed) :bool
		{
			if ($speed > 0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
	}

	trait Name {
		function setFirstName (string $name) : bool
		{
			$this->firstName = $name;
			return true;
		}

		function setLastName (string $name) : bool
		{
			$this->lastName = $name;
			return true;
		}
	}

	class Cat extends Animal
	{
		use Name;
		public function eat (string $food) : bool
		{
			if ($food === "tuna")
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		public function talk (bool $shout) : string
		{
			if ($shout === true)
			{
				return "MEOW!";
			}
			else
			{
				return "Meow.";
			}
		}
	}

	$whiskers = new Cat();
	print_r($whiskers->walk(1));
	echo "<br>" . $whiskers->talk(true) . "<br>";
	print_r($whiskers->setFirstName("cathy"));	
	echo "<br>" . $whiskers->firstName . "<br>";


	class Address 
	{
		public $firstLine;
		public $postcode;
		public $country;

		public function __construct(string $firstLine, string $postcode, string $country)
		{
			$this->firstLine = $firstLine;
			$this->postcode = $postcode;
			$this->country = $country;
		}
	}

	class Customer
	{
		public $name;
		public $address;

		public function __construct($name, Address $address)
		{
			$this->name = $name;
			$this->address = $address;
		}
	}

	$address = new Address('10 Downing Street', 'SW1A 2AA', 'UK');
	$customer = new Customer('Davey Cameron', $address);
	var_dump($customer->address->firstLine);
?>