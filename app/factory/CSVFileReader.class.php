<?php
require_once 'FileReader.class.php';

class CSVFileReader extends FileReader
{
	public function read()
	{
		$this->handler = fopen($this->filename, "r");
	}

	public function display()
	{
		setlocale(LC_ALL, 'ja_JP.utf8');
		while ($data = fgetcsv($this->handler, 4096, ',')) {
			echo "<pre>";
			print_r($data);
			echo "</pre>";
		}
	}
}