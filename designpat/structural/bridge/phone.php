<?php

	class Phone extends Device 
	{
		public function send($body)
		{
			$body .= "\n\n Sent from a phone.";
			$this->sender->send($body); 
		}
	}




?>