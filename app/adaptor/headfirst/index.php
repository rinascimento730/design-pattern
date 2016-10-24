<?php
require_once 'MallarDuck.class.php';
require_once 'WildTurkey.class.php';
require_once 'TurkeyAdaptor.class.php';

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

function testDuck(Duck $duck)
{
	$duck->quack();
	$duck->fly();
}

function headline($object)
{
	if (!is_object($object))
	{
		echo "クラスではありません<br>\n";
		return;
	}

	echo get_class($object)."の出力<br>\n";
}
