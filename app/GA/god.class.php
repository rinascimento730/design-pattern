<?php
require_once 'creature.class.php';

class God
{
	private static $god;

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

	public function create($name = null)
	{
		$energy_charge = $this->factory_energy_charge();
		$creature = $this->factory_creature($energy_charge, $name);

		return $creature;
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

	private function factory_creature(Energy_Charge $energy_charge, $name = null)
	{
		$rand = rand(0,1);

		$creature;

	    switch ($rand)
	    {
	        case 1:
				$creature = new Human($energy_charge, $name);
	        break;

	        default:
				$creature = new Dog($energy_charge, $name);
	        break;
	    }

		return $creature;
	}

	public final function __clone()
	{
		throw new RuntimeException(get_class($this));
	}
}