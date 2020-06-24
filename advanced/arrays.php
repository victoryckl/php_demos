<?php

$cars = array
(
	array("Volvo", 100, 96),
	array("BMW", 60, 59),
	array("Toyota", 110, 100)
);

var_dump($cars);


$families = array
(
	"Griffin"=>array("Peter", "Lois", "Megan"),
	"Quagmire"=>array("Glenn", array("good", "bad")),
	"Brown"=>array("Cleveland", "Loretta", "Junior")
);

var_dump($families);

echo "Is " . $families['Griffin'][2] . " a part of the Griffin family?";

?>