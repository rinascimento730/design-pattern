<?php
require_once 'god.class.php';

$god = God::summon();
$creatures = array();

for ($i = 0; $i <= rand(1, 20); $i++) {
	$creatures[] = $god->create();
}

foreach ($creatures as $creature) {
	$creature->get_name();
	$creature->eat();
	$creature->sleep();
}