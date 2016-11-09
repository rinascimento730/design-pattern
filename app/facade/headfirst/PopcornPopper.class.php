<?php
require_once '../../common/Util.trait.php';

class PopcornPopper
{
	use Util;

	public function on()
	{
		$this->express('ポップコーンポッパーの電源を入れます。');
	}

	public function off()
	{
		$this->express('ポップコーンポッパーの電源を切ります。');
	}

	public function pop()
	{
		$this->express('ポップコーンを作ります。');
	}
}