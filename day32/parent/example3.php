<?php

class animal
{
	protected $hungry = true;
	
	public function eat()
	{
		$this->hungry = false;
	}
}

class wolf extends animal { }

trait domesticated
{
	public function beFed()
	{
		parent::eat();
	}
}

trait add_special_ability {
	public function fly()
	{
	}
}

class dog extends animal
{
	use domesticated, add_special_ability;
}


$my_dog = new dog();
$my_dog->beFed();
$my_dog->fly();
var_dump($my_dog);
	