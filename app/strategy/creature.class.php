<?php
/*
 * 生き物Class
 */
abstract class Creature
{
	use Util;
	private $name;
	private $food_preference;
	abstract public function sleep();

	public function __construct(Energy_Charge $food_preference, $name = null)
	{
		$this->food_preference = $food_preference;

		switch (true)
		{
		    case ! is_null($name):
				$this->name = $name;
		    break;

		    default:
				$this->name = $this->makeand_str();
		    break;
		}
	}

	public function eat()
	{
		$this->food_preference->eat();
	}

	public function get_name()
	{
		$this->express('私は'.$this->name);
		$this->express('私は'.get_class($this)."です。");
	}
}

class Human extends Creature
{
	public function sleep()
	{
		$this->express('ベッドで眠る');
	}
}

class Dog extends Creature
{
	public function sleep()
	{
		$this->express('ゲージで眠る');
	}
}

/*
 * 栄養補給の方法
 */
interface Energy_Charge
{
	public function eat();
}

class Meet_Eater implements Energy_Charge
{
	use Util;
	public function eat()
	{
		$this->express('肉うま。');
	}
}

class Veggie_Eater implements Energy_Charge
{
	use Util;
	public function eat()
	{
		$this->express('トマトうま。');
	}
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