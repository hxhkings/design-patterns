<?php

	require_once('student.php');

	$prototypeStudent = new Student();
	$prototypeStudent->setName('Tan');
	$prototypeStudent->setYear(3);
	$prototypeStudent->setGrade('A*');

	var_dump($prototypeStudent);

	$theLesserChild = clone $prototypeStudent;
	$theLesserChild->setName('Biboy');
	$theLesserChild->setGrade('B');

	var_dump($theLesserChild);

	$theChildProdigy = clone $prototypeStudent;
	$theChildProdigy->setName('Noel');
	$theChildProdigy->setYear(3);
	$theChildProdigy->setGrade('A');

	$theChildProdigy->danceSkills = "Outstanding";
	$theChildProdigy->dance = function(string $style){
		return "Dancing " . $style . " style.";
	};

	var_dump($theChildProdigy);
	var_dump($theChildProdigy->dance->__invoke('Zumba'));

?>