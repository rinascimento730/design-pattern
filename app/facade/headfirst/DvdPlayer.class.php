<?php
require_once '../../common/Util.trait.php';

class DvdPlayer
{
	use Util;

	private $amplifier;

	public function __construct(Amplifier $amplifier)
	{
		$this->amplifier = $amplifier;
	}

	public function on()
	{
		$this->express('DVDプレーヤーの電源を入れます。');
	}

	public function off()
	{
		$this->express('DVDプレーヤーの電源を入れます。');
	}

	public function eject()
	{
		$this->express('DVDを取り出します。');
	}

	public function pause()
	{
		$this->express('DVDの再生を一時停止します。');
	}

	public function play()
	{
		$this->express('DVDの再生を開始します。');
	}

	public function setSurroundAudio()
	{
		$this->express('アンプの音声をサラウンドに設定します。');
		$this->amplifier->setSurroundSound();
	}

	public function setTwoChannelAudio()
	{
		$this->express('アンプの音声をステレオに設定します。');
		$this->amplifier->setStereoSound();
	}

	public function stop()
	{
		$this->express('ポップコーンポッパーの電源を入れます。');
	}
}