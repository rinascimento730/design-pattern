<?php
require_once 'CartListener.class.php';

class LoggingListener implements CartListener
{
	public function update(Cart $cart)
	{
		echo '<pre>';
		print_r($cart->getItems());
		echo '</pre>';
	}
}