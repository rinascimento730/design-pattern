<?php
require_once('TextDecorator.class.php');

class UpperCaseText extends TextDecorator {
	public function getText() {
		$str = parent::getText();
		$str = strtoupper($str);
		return $str;
	}
}