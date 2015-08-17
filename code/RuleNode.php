<?php

abstract class RuleNode extends Object implements INodeComparable, IExtendFunctionSupportable {
	protected $RawValue;

	public function __construct($rawValue) {
		$this->RawValue = $rawValue;
	}

	public static function CreateNode($rawValue) {
		if (is_null($rawValue)) {
			$rawValue = "NULL";
		}
		if (is_bool($rawValue)) {
			$rawValue = $rawValue ? "True" : "False";
		}
		if (is_string($rawValue) || is_numeric($rawValue)) {
			return StringRuleNode::create($rawValue);
		}
		//  else if (is_array($rawValue)) {
		// 	return ArrayRuleNode::create($rawValue);
		// }
		//  else if ($rawValue instanceof DateTime) {
		// 	return DateTimeRuleNode::create($rawValue);
		// }
		return null;
	}

	public abstract function getNodeType();

	public function getRawValue() {
		return $this->RawValue;
	}

	/* operators */
	public function Equals($right) {
		throw new Exception($this->getNodeType() . ' does not support this operation - GreaterThan.');
	}

	public function GreaterThan($right) {
		throw new Exception($this->getNodeType() . ' does not support this operation - GreaterThan.');
	}

	public function EqualsOrGreaterThan($right) {
		throw new Exception($this->getNodeType() . ' does not support this operation - EqualsOrGreaterThan.');
	}

	public function LessThan($right) {
		throw new Exception($this->getNodeType() . ' does not support this operation - LessThan.');
	}

	public function EqualsOrLessThan($right) {
		throw new Exception($this->getNodeType() . ' does not support this operation - EqualsOrLessThan.');
	}

	public function StartsWith($right) {
		throw new Exception($this->getNodeType() . ' does not support this operation - StartsWith.');
	}

	public function EndsWith($right) {
		throw new Exception($this->getNodeType() . ' does not support this operation - EndsWith.');
	}

	public function Contains($right) {
		throw new Exception($this->getNodeType() . ' does not support this operation - GreaterThan.');
	}

	/* additional functions can be accessed after a dot */
	public function length() {
		throw new Exception($this->getNodeType() . ' does not support this method - length.');
	}

	public function lower() {
		throw new Exception($this->getNodeType() . ' does not support this method - length.');
	}

	public function upper() {
		throw new Exception($this->getNodeType() . ' does not support this method - length.');
	}
}