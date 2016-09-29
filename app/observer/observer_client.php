<?php
require_once 'Cart.class.php';

$cart = new Cart();

$cart->addItem("hoge");

var_dump($cart->getItems());

$cart->addItem("hoge");

var_dump($cart->getItems());

$cart->removeItem("hoge");

var_dump($cart->getItems());