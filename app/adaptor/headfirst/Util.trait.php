<?php
Trait Util
{
	public static function express($message = null)
	{
		echo "<pre>";
		print_r($message);
		echo "</pre>";
	}
}