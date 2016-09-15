<?php
require_once('TextDecorator.class.php');

class DoubleByteText extends TextDecorator {
	public function getText() {
		$str = parent::getText();
		$str = mb_convert_kana($str, "RANSKV", "UTF-8");
		return $str;
	}
}