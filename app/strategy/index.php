<?php
require_once 'creature.class.php';

$meat_eater = new Meet_Eater();
$veggie_eater = new Veggie_Eater();

$human1 = new Human($veggie_eater);
$dog1 = new Dog($veggie_eater);
$human2 = new Human($meat_eater, '藤永');
$dog2 = new Dog($meat_eater, 'こむすび');

$human1->get_name();
$human1->eat();
$human1->sleep();

$dog1->get_name();
$dog1->eat();
$human1->sleep();

$human2->get_name();
$human2->eat();
$human2->sleep();

$dog2->get_name();
$dog2->eat();
$human2->sleep();

class God
{
	private $god;

	public static function summon()
	{
		if (is_null(self::$god))
		{
			self::$god = new God();
		}

		if ( ! self::$god instanceof God)
		{
			throw new Exception('悪魔の祭壇');
		}

		return self::$god;
	}

	private function __construct()
	{

	}

	public function create()
	{
		if ($hoge)
		{
			//
		}

		elseif ($fuga)
		{
			//
		}

	}

	private function factory_energy_charge()
	{
		$rand = rand(0,1);

		$energy_charge;

	    switch ($rand)
	    {
	        case 1:
				$energy_charge = new Meet_Eater();
	        break;

	        default:
				$energy_charge = new Veggie_Eater();
	        break;
	    }

		return $energy_charge;
	}

	private function factory_creature(Energy_Charge $energy_charge)
	{
		$rand = rand(0,1);

		$creature;

	    switch ($rand)
	    {
	        case 1:
				$creature = new Human();
	        break;

	        default:
				$creature = new Dog();
	        break;
	    }

		return $creature;
	}

	public final function __clone()
	{
		throw new RuntimeException(get_class($this));
	}
}