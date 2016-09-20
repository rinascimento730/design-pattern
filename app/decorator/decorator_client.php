<?php
require_once('UpperCaseText.class.php');
require_once('DoubleByteText.class.php');
require_once('PlainText.class.php');
require_once('dummy.class.php');

$text = isset($_POST['text']) ? $_POST['text'] : '';
$decorates = (isset($_POST['decorate']) && is_array($_POST['decorate'])) ? $_POST['decorate'] : array();

if (!empty($text)) {
	$text_obj = new PlainText();
	$text_obj->setText($text);
	echo $text_obj->getText() ."<br>";
	foreach ($decorates as $decorate) {
		switch ($decorate) {
			case 'upper':
				$text_obj = new UpperCaseText($text_obj);
				break;

			case 'double':
				$text_obj = new DoubleByteText($text_obj);
				break;
			/*
			case 'hoge':
				$dummy = new Dummy();
				$text_obj = new DoubleByteText($dummy);
				break;
			*/
		}
	}

	echo $text_obj->getText() ."<br>";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Decorator Pattern</title>
</head>
<body>
	<form action="" method="post">
		テキスト:<input type="text" id="text" name="text"><br>
		装飾: <input type="checkbox" name="decorate[]" value="upper">大文字に変換
		<input type="checkbox" name="decorate[]" value="double">2バイト文字に変換
		<!-- <input type="hidden" name="decorate[]" value="hoge"> -->
		<input type="submit">
	</form>
</body>
</html>
