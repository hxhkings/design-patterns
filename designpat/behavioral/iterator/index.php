<?php

// Behavioral Design Pattern

require_once('timeiterator.php');

$time = new timeIterator(time());

foreach($time as $key => $value){
	var_dump($key, $value);
	echo "\n";
}
$it = $time->getIterator();

while($it->valid()){
	echo $it->key() . ' = ' . $it->current() . '<br>';
	$it->next();
}
?>