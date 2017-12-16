<?php

	require_once('employeespecification.php');
	require_once('employeeisengineer.php');

	require_once('workers.php');

	$isEngineer = new EmployeeIsEngineer();

	foreach($workers as $id => $worker){
		if($isEngineer->isSatisfiedBy($worker)){
			var_dump($id);
		}
	}




?>