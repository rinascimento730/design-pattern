<?php
require_once '../../common/Util.trait.php';

class TheaterLights
{
	use Util;

	public function on()
	{
		$this->express('ライトの電源を入れます。');
	}

	public function off()
	{
		$this->express('ライトの電源を切ります。');
	}

	public function dim($degree = 0)
	{
		$this->express('ライトを'.$degree.'段階暗くします。');
	}
}