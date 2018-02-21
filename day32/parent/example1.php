<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class pancake
{
	public function prepare()
	{
		echo 'Preparing flour...<br>';
		echo 'Preparing milk...<br>';
		echo 'Preparing eggs...<br>';
	}
}

class blueberry_pancake extends pancake
{
	public function prepare()
	{
		parent::prepare();
		echo 'Preparing blueberry jam...<br>';
		
	}
}

$bbp = new blueberry_pancake();
$bbp->prepare();