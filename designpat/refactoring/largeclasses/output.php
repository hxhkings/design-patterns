<?php

	interface Output 
	{
		public function load(array $data);
	}

	class Serial implements Output 
	{
		public function load(array $data)
		{
			return serialize($data);
		}
	}

	class JSON implements Output 
	{
		public function load(array $data)
		{
			return json_encode($data);
		}
	}

	class XML implements Output 
	{
		public function load(array $data)
		{
			return xmlrpc_encode($data);
		}
	}



?>