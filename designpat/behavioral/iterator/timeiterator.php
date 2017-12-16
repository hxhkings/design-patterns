<?php
	
	//IteratorAggregate and ArrayIterator are already existing interfaces

	class timeIterator implements IteratorAggregate
	{
		public function __construct(int $time)
		{
			$this->weekAgo = $time - 604800;
			$this->yesterday = $time - 86400;
			$this->now = $time;
			$this->tomorrow = $time + 86400;
			$this->nextWeek =  $time + 604800;
		}

		public function getIterator()
		{
			return new ArrayIterator($this);
		}
	}


?>