<?php
require_once 'Duck.interface.php';

class DuckAdaptor implements Turkey
{
	private $duck;
	private $fly_exec;

	public function __construct(Duck $duck)
	{
		$this->duck = $duck;
		$this->fly_exec = rand(0, 4);
	}

	public function gobble()
	{
		$this->duck->quack();
	}

	public function fly()
	{
		if ($this->fly_exec % 5 == 0)
		{
			$this->duck->fly();
		}

		$this->fly_exec++;
	}
}