<?php
/*
 * 生き物Class
 */
abstract class Creature
{
	use Util;
	private $name;
	private $gene;
	private static $adam;
	private static $eve;

	public function __construct($parent1 = null, $parent2 = null, $god = true)
	{
		if ($god && is_null($adam) && is_null($eve))
		{
			self::$adam = new ;
			self::$eve = ;
		}

		for ($i = 0; $i <= 4; $i++) {
			$this->$gene[] = rand(0,9);
		}

		$this->name = $this->makeand_str();
	}

	public function get_name()
	{
		$this->express('私は'.$this->name);
		$this->express('私は'.get_class($this)."です。");
	}
}

class Human extends Creature
{

}


/*
 * Web用の処理
 */
trait Util
{
	protected function express($message)
	{
		echo '<pre>';
		print_r($message);
		echo '</pre>';
	}

	protected function makeand_str($length = 15)
	{
	    $str = array_merge(range('a', 'z'), range('A', 'Z'));
	    $r_str = null;
	    for ($i = 0; $i < $length; $i++)
	    {
	        $r_str .= $str[rand(0, count($str) - 1)];
	    }

	    return $r_str;
	}
}