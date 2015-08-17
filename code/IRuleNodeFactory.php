<?php

interface IRuleNodeFactory {
	// create left node
	public function CreateNode($rawValue);

	// create right node
	public function ConvertRightValue($right);
}