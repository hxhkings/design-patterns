<?php


	class ShapeFactory 
	{
		private $shapeMap = array();

		public function getCircle(string $colour)
		{
			$circle = "Circle_" . $colour;

			if (!isset($this->shapeMap[$circle]))
			{
				echo "Creating a/an " . $colour . " circle.";
				echo "\n";
				$this->shapeMap[$circle] = new Circle($colour);
			}

			return $this->shapeMap[$circle];
		}
	}



?>