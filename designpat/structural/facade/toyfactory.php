<?php
	
	// facade
	class ToyShop
	{
		private $courier;
		private $manufacturer;
		private $sms;

		public function __construct(String $factoryAddress, String $contactNumber, int $capacity)
		{
			$this->courier = new Post($factoryAddress);
			$this->manufacturer = new Manufacturer($capacity);
			$this->sms = new SMS($contactNumber);
		}

		public function processOrder(string $address, $phone)
		{
			$item = $this->manufacturer->build();
			$this->courier->dispatch($item, $address);
			$this->sms->send($phone, "Your order has been shipped.");
		}
	}

?>
