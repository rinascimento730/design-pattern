<?php
require_once '../../common/Util.trait.php';

class Projector
{
	use Util;

	private $dvdplayer;

	public function on()
	{
		$this->express('ポップコーンポッパーの電源を入れます。');
	}

	public function off()
	{
		$this->express('ポップコーンポッパーの電源を入れます。');
	}

	public function tvMode()
	{
		$this->express('ポップコーンポッパーの電源を入れます。');
	}

	public function wideScreenMode()
	{
		$this->express('ポップコーンポッパーの電源を入れます。');
	}
}