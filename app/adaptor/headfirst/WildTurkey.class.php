<?php
require_once 'Util.trait.php';
require_once 'Turkey.interface.php';

class WildTurkey implements Turkey
{
	use Util;

	public function gobble()
	{
		self::express('ゴロゴロ');
	}

	public function fly()
	{
		self::express('短い距離を飛んでいます');
	}
}