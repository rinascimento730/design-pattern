<?php
require_once '../../common/Util.trait.php';

class Tuner
{
	use Util;

	private $amplifier;

	public function on()
	{
		$this->express('チューナーの電源を入れます。');
	}

	public function off()
	{
		$this->express('チューナーの電源を切ります。');
	}

	public function setAm()
	{
		$this->express('AMに切り替えます。');
	}

	public function setFm()
	{
		$this->express('Mに切り替えます。');
	}

	public function setFrequency($freq = 0)
	{
		$this->express('周波数を'.$freq.'にします。');
	}
}