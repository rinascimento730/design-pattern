<?php
require_once 'MallarDuck.class.php';
require_once 'WildTurkey.class.php';
require_once 'TurkeyAdaptor.class.php';
require_once 'DuckAdaptor.class.php';

$hoge;
var_dump($hoge);


# MallarDuck
$mallar_duck = new MallarDuck();
headline($mallar_duck);
testDuck($mallar_duck);

$wild_turkey = new WildTurkey();
headline($wild_turkey);
$wild_turkey->gobble();
$wild_turkey->fly();
#testDuck($wild_turkey);

$wild_turkey_like_duck = new TurkeyAdaptor(new WildTurkey());
headline($wild_turkey_like_duck);
testDuck($wild_turkey_like_duck);

$mallar_duck_like_turkey = new DuckAdaptor(new MallarDuck());
headline($mallar_duck_like_turkey);

for ($i = 0; $i < 6; $i++)
{
	testTurkey($mallar_duck_like_turkey);
}


function testDuck(Duck $duck)
{
	$duck->quack();
	$duck->fly();
}

function testTurkey(Turkey $turkey)
{
	$turkey->gobble();
	$turkey->fly();
}

function headline($object)
{
	if ( ! is_object($object))
	{
		echo "クラスではありません<br>\n";
		return;
	}

	echo get_class($object)."の出力<br>\n";
}
