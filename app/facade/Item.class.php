<?php
class Item
{
	private $id;
	private $name;
	private $price;

	private static $props = array(
		'id',
		'name',
		'price'
	);

	public function __construct(stdClass $item)
	{
		foreach (self::$props as $prop)
		{
			if ( ! property_exists($item, $prop))
			{
				throw new Exception('This is not valid Item.');
			}

			$this->$prop = $item->$prop;
		}
	}

	public function getId()
	{
		return $this->id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getPrice()
	{
		return $this->price;
	}
}