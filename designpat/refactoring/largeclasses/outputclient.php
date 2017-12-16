<?php

	// Output injection to get away with switch

	class OutputClient
	{
		private $output;

		public function __construct(Output $outputType)
		{
			$this->output = $outputType;
		}

		public function loadOutput(array $data)
		{
			return $this->output->load($data);
		}
	}



?>