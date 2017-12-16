<?php

	require_once("pizzabuilder.php");
	require_once("pizza.php");

	$pizzaRecipe = (new PizzaBuilder(9))
					->cheese(true)
					->pepperoni(true)
					->bacon(true)
					->build();

	$order = new Pizza($pizzaRecipe);
	echo $order->show();


?>