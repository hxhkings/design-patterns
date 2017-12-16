<?php
	namespace Hxhking\Properties;

	class Notebook
	{
		private static $brand = 'hxhbrand';

		private static $leaves = 255;

		public function __construct()
		{
			return 'My notebook is branded ' . self::$brand .
					 ' with ' . self::$leaves . ' no. of leaves.';
		}

	} 