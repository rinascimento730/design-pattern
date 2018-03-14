<?php
require_once 'caffeine_beverage.class.php';

class Tea extends CaffeineBeverage
{
	public function brew()
	{
		$this->express('紅茶を浸します。');
	}

	public function add_condiments()
	{
		$this->express('レモンを追加します。');
	}
}