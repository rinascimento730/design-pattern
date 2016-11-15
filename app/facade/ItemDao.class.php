<?php
require_once 'OrderItem.class.php';

class ItemDao
{
	const DATA_FILE = 'data/item_data.json';
	private static $instance;
	private $items;

	private function __construct()
	{
		$json = file_get_contents(self::DATA_FILE);
		$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
		$json_obj = json_decode($json);

		if ( ! property_exists($json_obj, 'items'))
		{
			throw new Exception('Bad json data');
		}

		var_dump($json_obj);

		foreach ($json_obj->items as $item_obj)
		{
			$item = new Item($item_obj);
			$this->items[$item->getId()] = $item;
		}
	}

	public function getInstance()
	{
		if (!isset(self::$instance))
		{
			self::$instance = new ItemDao();
		}

		return self::$instance;
	}

	public function findById($item_id)
	{
		if (!array_key_exists($item_id, $this->items))
		{
			return $this->items[$item_id];
		}

		return null;
	}

	public function setAside(OrderItem $order_item)
	{
		echo $order_item->getItem()->getName().'の在庫引当を行いました<br>';
	}

	public final function __clone()
	{
		throw new RuntimeException('Clone is not allowed against '.get_class($this));
	}
}