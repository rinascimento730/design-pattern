<?php
require_once '../../common/Util.trait.php';

class CdPlayer
{
	use Util;

	private $amplifier;

	public function __construct(Amplifier $amplifier)
	{
		$this->amplifier = $amplifier;
	}

	public function on()
	{
		$this->express('CDプレーヤーの電源を入れます。');
	}

	public function off()
	{
		$this->express('CDプレーヤーの電源を切ります。');
	}

	public function eject()
	{
		$this->express('CDを取り出します。');
	}

	public function pause()
	{
		$this->express('再生を一時停止します。');
	}

	public function play()
	{
		$this->express('再生します。');
	}

	public function stop()
	{
		$this->express('再生を停止します。');
	}
}