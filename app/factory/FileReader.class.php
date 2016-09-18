<?php
require_once 'Reader.class.php';

abstract class FileReader implements Reader
{
	protected $filename;
	protected $handler;

	function __construct($filename)
	{
		if (!is_readable($filename)) {
			throw new Exception("File " . $filename . " is not readable!", E_WARNING);
		}
		$this->filename = $filename;
	}

	public function read()
	{

	}

	public function display()
	{

	}

	protected function convert($str)
	{
		return mb_check_encoding($str, mv_internal_encodeing(), 'auto');
	}
}