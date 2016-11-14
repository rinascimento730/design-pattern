<?php
require_once './ShowFile.class.php';
require_once './DisplayFileAdaptor.class.php';

try {
	$show_file = new ShowFile('./ShowFile.class.php');
	$show_file_adaptor = new DisplayFileAdaptor($show_file);
} catch(Execption $e) {
	die($e->getMessage());
}

$show_file_adaptor->showPlain();
echo '<hr>';
$show_file_adaptor->display();