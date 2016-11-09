<?php
require_once '../../common/Util.trait.php';

class Amplifier
{
	use Util;

	private $tuner;
	private $dvdPlayer;
	private $cdPlayer;

	public function on()
	{
		$this->express('アンプの電源を入れます。');
	}

	public function off()
	{
		$this->express('アンプの電源を切ります。');
	}

	public function setCd()
	{
		$this->express('入力をCDに切り替えます。');
	}

	public function setDvd()
	{
		$this->express('入力をDVDに切り替えます。');
	}

	public function setStereoSound()
	{
		$this->express('音声をステレオにします。');
	}

	public function setSurroundSound()
	{
		$this->express('音声をサラウンドにします。');
	}

	public function setTuner()
	{
		$this->express('入力をチューナーに切り替えます。');
	}

	public function setVolume($volume = 0)
	{
		$this->express('ボリュームを'.$volume.'にします。');
	}
}