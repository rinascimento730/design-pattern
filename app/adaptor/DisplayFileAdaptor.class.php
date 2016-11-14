<?php
require_once './DisplaySourceFile.class.php';

class DisplayFileAdaptor implements DisplaySourceFile
{
	private $adaptee;

	public function __construct(ShowFile $show_file)
	{
		$this->adaptee = $show_file;
	}

	public function showPlain()
	{
		$this->adaptee->showPlain();
	}

	public function display()
	{
		$this->adaptee->showHightlight();
	}
}