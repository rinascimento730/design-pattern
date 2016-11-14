<?php
require_once '../common/Util.trait.php';

class ShowFile
{
	use Util;

	private $file;

	public function __construct($filename = null)
	{
		if ( ! is_readable($filename))
		{
			throw new Exception('The file is not readable', 1);
		}

		$this->file = $filename;
	}

	public function showPlain()
	{
		$contents = htmlspecialchars(file_get_contents($this->file), ENT_QUOTES, 'utf-8');
		$this->express($contents);
	}

	public function showHightlight()
	{
		$contents = highlight_file($this->file, true);
		$this->express($contents);
	}
}