<?php

interface INodeComparable {
	public function Equals($right);
	public function GreaterThan($right);
	public function EqualsOrGreaterThan($right);
	public function LessThan($right);
	public function EqualsOrLessThan($right);
	public function StartsWith($right);
	public function EndsWith($right);
	public function Contains($right);
}