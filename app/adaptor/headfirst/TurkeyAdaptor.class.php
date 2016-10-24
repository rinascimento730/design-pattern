<?php
require_once 'Duck.interface.php';

class TurkeyAdaptor implements Duck
{
	private $turkey;

	public function __construct(Turkey $turkey)
	{
		$this->turkey = $turkey;
	}

	public function quack()
	{
		$this->turkey->gobble();
	}

	public function fly()
	{
		for ($i = 0; $i < 5; $i++)
		{
			$this->turkey->fly();
		}
	}
}