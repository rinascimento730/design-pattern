<?php

require_once 'Test.class.php';

// $test = new Test();
$test = Test::getInstance();
echo "<pre>";
echo $test->getHoge();
echo "</pr>";
echo "<pre>";
echo $test->fuga;
echo "</pr>";
echo "</pr>";
echo "<pre>";
echo Test::$nuga;
echo "</pr>";

echo "\ngetVar\n";
$test->setVar();
echo "<pre>";
echo $test->getVar();
echo "</pr>";


// $test2 = new Test();
$test2 = Test::getInstance();
echo "<pre>";
echo $test2->getHoge();
echo "</pre>";
echo "<pre>";
echo $test2->fuga;
echo "</pr>";
echo "<pre>";
echo Test::$nuga;
echo "</pr>";

echo "ngetVar\n";
$test2->setVar();
echo "<pre>";
echo $test2->getVar();
echo "</pr>";

echo "<pre>";
var_dump($test === $test2);
echo "</pr>";

echo "<pre>";
echo $test->getHoge();
echo "</pr>";
echo "<pre>";
echo $test2->getHoge();
echo "</pr>";
echo $test->setHoge();
// $test->clear();
echo "<pre>";
echo $test2->getHoge();
echo "</pr>";

/*
$test3 = clone $test2;
echo "<pre>";
echo $test2->fuga;
echo "</pr>";
echo "<pre>";
echo $test3->getVar();
echo "</pr>";

echo "<pre>";
var_dump($test3 === $test2);
echo "</pr>";
echo "<pre>";
print_r($test2);
echo "</pr>";
echo "<pre>";
print_r($test3);
echo "</pr>";
*/
