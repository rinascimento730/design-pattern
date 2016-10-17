<?php
require_once 'god.class.php';

$god = God::summon();
$creatures = array();

for ($i = 0; $i <= rand(1, 20); $i++)
{
	$name = null;
	if ($i % 3 == 0)
	{
		$name = "藤永";
	}

	$creatures[] = $god->create($name);
}

foreach ($creatures as $creature)
{
	$creature->get_name();
	$creature->eat();
	$creature->sleep();
}