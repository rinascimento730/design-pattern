<?php
require_once 'CartListener.class.php';

class PresentListener implements CartListener
{
	private static $PRESENT_TARGET_ITEM = '30:クッキーセット';
	private static $PRESENT_ITEM = '99:プレセンド';

	public function update(Cart $cart)
	{
		var_dump($cart->hasItem(self::$PRESENT_TARGET_ITEM));
		if ($cart->hasItem(self::$PRESENT_TARGET_ITEM) && !$cart->hasItem(self::$PRESENT_ITEM)) {
			$cart->addItem(self::$PRESENT_ITEM);
		}

		if (!$cart->hasItem(self::$PRESENT_TARGET_ITEM) && $cart->hasItem(self::$PRESENT_ITEM)) {
			$cart->removeItem(self::$PRESENT_ITEM);
		}
	}
}