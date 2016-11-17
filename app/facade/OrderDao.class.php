<?php
/**
 * /Users/fujinaga/vagrant/design-pattern/app/facade/OrderDao.class.php
 */

/**
 * 注文データの操作クラス
 *
 * 注文データの操作に関する処理を行います。
 *
 * @author rinascimento730 <b.fujinaga@gmail.com>
 * @copyright rinascimento730
 * @package Model
 * @version 001
 */
class OrderDao
{
	/**
	 *  商品の実行
	 *
	 *  商品の注文を実行します
	 *
	 * @access public
	 * @param  object $order 注文インスタンス
	 */
	public static function createOrder(Order $order)
	{
		echo '以下の内容で注文データを作成しました';

		echo '<table border="1">';
		echo '<tr>';
		echo '<th>商品番号</th>';
		echo '<th>商品名</th>';
		echo '<th>単価</th>';
		echo '<th>数量</th>';
		echo '<th>金額</th>';
		echo '</tr>';

		foreach ($order->getItems() as $item)
		{
			echo '<tr>';
			echo '<td>'.$item->getItem()->getId().'</td>';
			echo '<td>'.$item->getItem()->getName().'</td>';
			echo '<td>'.$item->getItem()->getPrice().'</td>';
			echo '<td>'.$item->getAmount().'</td>';
			echo '<td>'.$item->getItem()->getPrice() * $item->getAmount().'</td>';
			echo '</tr>';
		}

		echo '</table>';
	}
}