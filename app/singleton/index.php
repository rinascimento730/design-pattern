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

echo "<pre>";
var_dump($test === $test2);
echo "</pr>";

class Test
{
	private static $instance;
	public static $nuga;
	private $hoge;
	public $fuga;
	public static function getInstance()
	{
		self::$instance = "hoge";
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
}