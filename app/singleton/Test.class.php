<?php
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