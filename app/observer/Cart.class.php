<?php
class Cart
{
	private $items;
	private $listeners;

	public function __construct()
	{
		$this->items = array();
		$this->listeners = array();
	}

	public function addItem($item_cd)
	{
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

	public function addListner(CartListener $listener)
	{
		$this->listeners[get_class($listner)] = $listener;
	}

	public function removeListner(CartListener $listener)
	{
		unnset($this->listeners[get_class($listner)]);
	}

	private function notify()
	{
		foreach ($this->listeners as $listener) {
			$listener->updata($this);
		}
	}


}