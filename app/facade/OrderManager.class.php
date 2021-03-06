<?php
/**
 * /Users/fujinaga/vagrant/design-pattern/app/facade/OrderManager.class.php
 */
require_once 'Order.class.php';
require_once 'ItemDao.class.php';
require_once 'OrderDao.class.php';

/**
 * 注文実行のFacadeクラス
 *
 * 注文実行に関する処理を行う高次クラス
 *
 * @author rinascimento730 <b.fujinaga@gmail.com>
 * @copyright rinascimento730
 * @package Model
 * @version 001
 */
class OrderManager
{
	/**
	 *  注文実行
	 *
	 *  注文を実行する
	 *
	 * @access public
	 * @param  object $order Orderオブジェクト
	 */
	public function order(Order $order)
	{
		$item_dao = ItemDao::getInstance();

		foreach ($order->getItems() as $item)
		{
			$item_dao->setAside($item);
		}

		OrderDao::createOrder($order);
	}
}