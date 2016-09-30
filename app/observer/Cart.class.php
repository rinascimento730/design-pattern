<?php
class Cart
{
	private static $cart;
	private $items;
	private $listeners;

	public static function getInstance()
	{
		if (!isset(self::$cart)) {
			self::$cart = new Cart();
		}

		if (!self::$cart instanceof Cart){
			throw new RuntimeException(get_class($this));
		}

		return self::$cart;
	}

	private function __construct()
	{
		$this->items = array();
		$this->listeners = array();
	}

	public function addItem($item_cd)
	{
		var_dump($this->items);
		$this->items[$item_cd] = (isset($this->items[$item_cd]) ? ++$this->items[$item_cd] : 1);
		$this->notify();
	}

	public function removeItem($item_cd)
	{
		$this->items[$item_cd] = (isset($this->items[$item_cd]) ? --$this->items[$item_cd] : 0);

		if ($this->items[$item_cd] <= 0) {
			unset($this->items[$item_cd]);
		}

		$this->notify();
	}

	public function getItems()
	{
		return $this->items;
	}

	public function hasItem($item_cd)
	{
		return array_key_exists($item_cd, $this->items);
	}

	public function addListener(CartListener $listener)
	{
		$this->listeners[get_class($listener)] = $listener;
		$this->notify();
	}

	public function removeListener(CartListener $listener)
	{
		unnset($this->listeners[get_class($lisetner)]);
	}

	public function clear()
	{
		$this->items = array();
		$this->notify();
	}

	private function notify()
	{
		foreach ($this->listeners as $listener) {
			$listener->update($this);
		}
	}

	public final function __clone()
	{
		throw new RuntimeException(get_class($this));
	}
}