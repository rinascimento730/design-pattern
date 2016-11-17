<?php
/**
 * /Users/fujinaga/vagrant/design-pattern/app/facade/ItemDao.class.php
 */
require_once 'OrderItem.class.php';

/**
 * 商品情報操作クラス
 *
 * 商品の情報を利用します
 *
 * @author rinascimento730 <b.fujinaga@gmail.com>
 * @copyright rinascimento730
 * @package Model
 * @version 001
 */
class ItemDao
{
	/**
	 * 商品マスタファイル
	 * @var string DATA_FILE 商品マスタデータのパス
	 */
	const DATA_FILE = 'data/item_data.json';

	/**
	 * ItemDaoインスタンス
	 * @var object $instance ItemDaoインスタンス
	 */
	private static $instance;

	/**
	 * 商品一覧
	 * @var array $items 商品一覧
	 */
	private $items;

	/**
	 *  初期化処理
	 *
	 *  商品マスタデータから商品オブジェクトを生成して設定
	 *
	 * @access private
	 * @throws Exception 必須の商品属性が設定されていなかった場合
	 */
	private function __construct()
	{
		$json = file_get_contents(self::DATA_FILE);
		$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
		$json_obj = json_decode($json);

		if ( ! property_exists($json_obj, 'items'))
		{
			throw new Exception('Bad json data');
		}

		foreach ($json_obj->items as $item_obj)
		{
			$item = new Item($item_obj);
			$this->items[$item->getId()] = $item;
		}
	}

	/**
	 *  インスタンスの取得
	 *
	 *  インスタンスの取得
	 *
	 * @access public
	 * @return object self::$instance ItemDaoインスタンス
	 */
	public function getInstance()
	{
		if (!isset(self::$instance))
		{
			self::$instance = new ItemDao();
		}

		return self::$instance;
	}

	/**
	 *  インスタンスの取得
	 *
	 *  インスタンスの取得
	 *
	 * @access public
	 * @param  int    $item_id        商品ID
	 * @return null|object $this->items[$item_id] 指定IDのItemインスタンス
	 */
	public function findById($item_id)
	{
		if ( ! array_key_exists($item_id, $this->items))
		{
			return null;
		}

		return $this->items[$item_id];
	}

	/**
	 *  在庫引当処理
	 *
	 *  在庫引当を行います
	 *
	 * @access public
	 * @param  object $order_item 商品注文インスタンス
	 */
	public function setAside(OrderItem $order_item)
	{
		echo $order_item->getItem()->getName().'の在庫引当を行いました<br>';
	}

	/**
	 *  クローン
	 *
	 *  シングルトンなので複製しようとエラーにする
	 *
	 * @access public
	 * @final
	 * @throws Exception 実行されたら必ず発生
	 */
	public final function __clone()
	{
		throw new RuntimeException('Clone is not allowed against '.get_class($this));
	}
}