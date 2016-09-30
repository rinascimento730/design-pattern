<?php
require_once 'Cart.class.php';
require_once 'PresentListener.class.php';
require_once 'LoggingListener.class.php';

# test
/*
$cartTest = Cart::getInstance();

$cartTest->addItem("hoge");

var_dump($cartTest->getItems());

$cartTest->addItem("hoge");

var_dump($cartTest->getItems());

$cartTest->removeItem("hoge");

var_dump($cartTest->getItems());
*/

# Client Process

function createCart()
{
	$cart = Cart::getInstance();
	$cart->addListener(new PresentListener());
	$cart->addListener(new LoggingListener());

	return $cart;
}

function getCart()
{
	if (!isset($_SESSION['cart']) || (!$_SESSION['cart'] instanceof Cart)) {
		$cart = createCart();
	} else {
		$cart = $_SESSION['cart'];
	}

	return $cart;
}

session_start();
$cart = getCart();

$post = $_POST;
$item = isset($post['item']) ? $post['item'] : null;
$mode = isset($post['mode']) ? $post['mode'] : null;

if (!is_null($item) && !is_null($mode)) {
	if (!is_string($item)) {
		throw new Exception("Error Processing Request", 1);
	}

	switch ($mode) {
		case 'add':
			$cart->addItem($item);
			echo $item . "を追加しました。";
			break;

		case 'remove':
			$cart->removeItem($item);
			echo $item . "を削除しました。";
			break;

		case 'clear':
			$cart->clear();
			break;

		default:
			throw new Exception("Error Processing Request", 1);
			break;
	}
}
var_dump($cart);

$_SESSION['cart'] = $cart;

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Observerパターン</title>
</head>
<body>
	<h2>商品を変更する</h2>
	<form action="" method="post">
		<select name="item">
			<option value="10:Tシャツ">Tシャツ</option>
			<option value="20:ぬいぐるみ">ぬいぐるみ</option>
			<option value="30:クッキーセット">クッキーセット</option>
		</select>
		<input type="submit" name="mode" value="add">
		<input type="submit" name="mode" value="remove">
		<input type="submit" name="mode" value="clear">
	</form>

	<h2>現在の商品</h2>
	<?php
	$items = $cart->getItems();
	if (!empty($items)) :
	?>
	<ul>
		<?php foreach ($items as $itemName => $itemCount): ?>
		<li><?php echo $itemName; ?>: <?php echo $itemCount; ?>個</li>
		<?php endforeach; ?>
	</ul>
	<?php endif; ?>
</body>
</html>






