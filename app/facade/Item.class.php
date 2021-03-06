<?php
/**
 * /Users/fujinaga/vagrant/design-pattern/app/facade/Item.class.php
 */

/**
 * 商品クラス
 *
 * 商品の属性を表現
 *
 * @author rinascimento730 <b.fujinaga@gmail.com>
 * @copyright rinascimento730
 * @package Model
 * @version 001
 */
class Item
{
	/**
	 * 商品ID
	 * @var string $id 商品ID
	 */
	private $id;

	/**
	 * 商品名
	 * @var string $name 商品名
	 */
	private $name;

	/**
	 * 商品価格
	 * @var string $price 商品価格
	 */
	private $price;

	/**
	 * 商品の必須属性
	 * @var array $props 商品必須属性
	 */
	private static $props = array(
		'id',
		'name',
		'price'
	);

	/**
	 *  初期化処理
	 *
	 *  商品属性情報を設定する
	 *
	 * @access public
	 * @param  object $item 商品情報を持った標準クラス(stdClass)
	 * @throws Exception 必須の商品属性が設定されていなかった場合
	 */
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

	/**
	 *  商品ID取得
	 *
	 *  商品IDを取得します
	 *
	 * @access public
	 * @return string $this->id 商品ID
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 *  商品名取得
	 *
	 *  商品名を取得します
	 *
	 * @access public
	 * @return string $this->name 商品名
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 *  商品価格取得
	 *
	 *  商品価格を取得します
	 *
	 * @access public
	 * @return string $this->price 商品価格
	 */
	public function getPrice()
	{
		return $this->price;
	}
}