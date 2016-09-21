<?php

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

class Test
{
	private static $instance;
	public static $nuga;
	private $hoge;
	private static $var;
	public $fuga;
	public static function getInstance()
	{
		// self::$instance = "hoge";
		if (!self::$instance instanceof Test){
		// if (!isset(self::$instance)){
			self::$instance = new Test();
		}
		// var_dump(self::$instance);exit;
		return self::$instance;
	}

	private function __construct()
	{
		$this->hoge++;
		$this->fuga++;
		self::$nuga++;
	}

	public function getHoge()
	{
		return $this->hoge;
	}

	public static function getVar()
	{
		return self::$var;
	}

	public function setVar()
	{
		self::$var++;
	}

	public final function __clone()
	{
		// var_dump(get_class($this));
		throw new RuntimeException(get_class($this));
	}
}