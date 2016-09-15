<?php
require_once 'XMLFileReader.class.php';
require_once 'CSVFileReader.class.php';

class ReaderFactory
{
	public function create($filename)
	{
		$reader = $this->createReader($filename);
		return $reader;
	}

	private function createReader($filename)
	{
		switch (true) {
			case stripos($filename, '.csv'):
				return new CSVFileReader($filename);
				break;

			case stripos($filename, '.xml'):
				return new XMLFileReader($filename);
				break;
		}

		return false;
	}
}