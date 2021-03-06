<?php
/**
 * /Users/fujinaga/vagrant/design-pattern/app/facade/index.php
 */
require_once 'Order.class.php';
require_once 'OrderItem.class.php';
require_once 'ItemDao.class.php';
require_once 'OrderManager.class.php';

$order = new Order();
$item_dao = ItemDao::getInstance();

for ($i = 1; $i <= 3; $i++)
{
	$order->addItem(new OrderItem($item_dao->findById($i), rand(1,3)));
}

OrderManager::order($order);