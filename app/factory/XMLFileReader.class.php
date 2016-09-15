<?php
require_once 'FileReader.class.php';

class XMLFileReader extends FileReader
{
	public function read()
	{
		try {
			$this->handler = simplexml_load_file($this->filename);
		} catch (Exception $e) {
			throw new Exception("Error: " . $e);
		}
	}

	public function display()
	{
		foreach ($this->handler->doc as $document) {
			echo "<pre>";
			print_r($document->field);
			echo "</pre>";
		}
	}
}