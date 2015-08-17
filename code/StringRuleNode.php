<?php

class StringRuleNode extends RuleNode {
	public function getNodeType() {
		return 'String';
	}

	public function Equals($right) {
		$strRight = (string) $right;
		// r($this->RawValue);
		// r($right);
		// r((string) $right);
		// r($this->RawValue == (string) $right);
		// if ($this->RawValue == 1 && strtolower($strRight) == 'true') {
		// 	r("return for true");
		// 	return true;
		// } else if ($this->RawValue == 0 && strtolower($strRight) == 'false') {
		// 	r("return for false");
		// 	return true;
		// }
		return $this->RawValue == (string) $right;
	}

	public function GreaterThan($right) {
		$l = floatval($this->RawValue);
		$r = floatval($right);
		return $l > $r;
	}

	public function EqualsOrGreaterThan($right) {
		$l = floatval($this->RawValue);
		$r = floatval($right);
		return $l >= $r;
	}

	public function LessThan($right) {
		$l = floatval($this->RawValue);
		$r = floatval($right);
		return $l < $r;
	}

	public function EqualsOrLessThan($right) {
		$l = floatval($this->RawValue);
		$r = floatval($right);
		return $l <= $r;
	}

	public function StartsWith($right) {
		return substr($this->RawValue, 0, strlen($right)) == $right;
	}

	public function EndsWith($right) {
		return substr($this->RawValue, -strlen($right)) == $right;
	}

	public function Contains($right) {
		return strpos($this->RawValue, $right) !== false;
	}

	/* additional functions can be accessed after a dot */
	public function length() {
		return strlen($this->RawValue);
	}

	public function lower() {
		return strtolower($this->RawValue);
	}

	public function upper() {
		return strtoupper($this->RawValue);
	}
}