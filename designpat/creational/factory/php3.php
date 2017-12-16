<?php

	echo "<h1>Creational Patterns</h1>";

	abstract class Notifier
	{
		protected $to;

		public function __construct(string $to)
		{
			$this->to = $to;
		}
		
		abstract public function validateTo() : bool;

		abstract public function sendNotification() : string;
		
	}





?>