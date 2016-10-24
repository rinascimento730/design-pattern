<?php
require_once 'Util.trait.php';
require_once 'Duck.interface.php';

class MallarDuck implements Duck
{
	use Util;
	public function quack()
	{
		self::express('ガーガー');
	}

	public function fly()
	{
		self::express('飛んでいます');
	}
}