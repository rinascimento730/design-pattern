<?php
require_once 'ReaderFactory.class.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
$filename = "test.xml";
// $filename = "test.csv";

$factory = new ReaderFactory($filename);
$data = $factory->create($filename);
$data->read();
$data->display();
?>
</body>
</html>