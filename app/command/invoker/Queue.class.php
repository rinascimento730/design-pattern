<?php
require_once 'command/Command.class.php';

class Queue
{
	private $commands;

	public function __construct()
	{
		$this->commands = array();
		$this->corrent_index = 0;
	}

	public function addCommand(Command $command)
	{
		$this->commands[] = $command;
	}

	public function run()
	{
		foreach ($this->commands as $command) {
			$command->execute();
		}
	}
}