<?php
require_once '../../common/Util.trait.php';

class Screen
{
	use Util;

	public function up()
	{
		$this->express('スクリーンを上げます。');
	}

	public function down()
	{
		$this->express('スクリーンを下げます。');
	}
}