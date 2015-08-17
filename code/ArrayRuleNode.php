<?php

class ArrayRuleNode extends RuleNode {
	public function getNodeType() {
		return 'Array';
	}

	public function Equals($right) {
		return in_array($right, $this->RawValue);
	}

	public function Contains($right) {
		return $this->Equals($right);
	}

	/* additional functions can be accessed after a dot */
	public function length() {
		return sizeof($this->RawValue);
	}
}

class ArrayNodeFactory extends Object implements IRuleNodeFactory {
	public function CreateNode($rawValue) {
		if (is_array($rawValue)) {
			return ArrayRuleNode::create($rawValue);
		}
		return null;
	}

	public function ConvertRightValue($right) {
		return $right;
	}
}