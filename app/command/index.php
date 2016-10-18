<?php
require_once 'invoker/Queue.class.php';
require_once 'command/TouchCommand.class.php';
require_once 'command/CompressCommand.class.php';
require_once 'command/CopyCommand.class.php';
require_once 'receiver/File.class.php';

$queue = new Queue();
$file = new File("sample.txt");

$queue->addCommand(new TouchCommand($file));
$queue->addCommand(new CompressCommand($file));
$queue->addCommand(new CopyCommand($file));

$queue->run();

