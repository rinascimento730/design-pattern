<?php
require_once 'caffeine_beverage.class.php';

class Coffee extends CaffeineBeverage
{
	public function brew()
	{
		$this->express('フィルターでコーヒーをドリップします。');
	}

	public function add_condiments()
	{
		$this->express('砂糖とミルクを追加します。');
	}
}