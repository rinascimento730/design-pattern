<?php
require_once 'coffee.class.php';
require_once 'tea.class.php';

$coffee = new Coffee();
$tea = new Tea();

$coffee->prepare_recipe();
$tea->prepare_recipe();
