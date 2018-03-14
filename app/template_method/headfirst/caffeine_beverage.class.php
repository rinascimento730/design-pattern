<?php
require_once '../../common/Util.trait.php';

abstract class CaffeineBeverage
{
	use Util;

	final public function prepare_recipe()
	{
		$this->boil_water();
		$this->brew();
		$this->pour_in_cup();
		$this->add_condiments();
	}

	abstract public function brew();

	abstract public function add_condiments();

	public function boil_water()
	{
		$this->express('お湯を沸かします。');
	}

	public function pour_in_cup()
	{
		$this->express('カップに注ぎます。');
	}
}