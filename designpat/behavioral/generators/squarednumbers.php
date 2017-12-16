<?php

	// Behavioral Design Pattern

	function squaredNumbers(int $start, int $end): Generator
	{
		var_dump("Generator starts.");

		for($i = $start; $i <= $end; $i++){
			var_dump($i . " in series.");
			(yield $i => pow($i, 2));
		}

		var_dump("Generator ends.");
	}

	foreach(squaredNumbers(1, 5) as $key => $number){
		echo $key . ' = ' . $number;
	}


	function innerGenerator()
	{
		yield from [1, 2, 3, 4, 5];
	}

	foreach (innerGenerator() as $number) {
		var_dump($number);
	}

	function outerGenerator()
	{
		yield [1, 2, 3, 4, 5];
	}

	foreach (outerGenerator() as $number) {
		var_dump($number);
	}
?>