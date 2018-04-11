<?php
class phone
{
	public $number = null;
	
	public function __construct($number)
	{
		$this->number = $number;
	}
}

class czech_phone extends phone
{
	public function __construct($number)
	{
		parent::__construct('0042' . $number);
	}
	
	public function never_do_this()
	{
		require_once '.....';
	}
}


$phone = new czech_phone('123456789');
echo $phone->number; // should yield 0042123456789