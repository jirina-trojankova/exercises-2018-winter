<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class shopping_item
{
	public $name = null;
	public $data = [];
	
	public function __construct($name)
	{
		$this->name = $name;
	}
	
	public function __set($name, $value)
	{
		if ($name == 'price') {
			$this->data[$name] = round(floatval($value), 2);
		}
	}
	
	public function __get($name)
	{
		if ($name == 'price') {
			return number_format(floatval($this->data[$name]), 2);
		}
	}
	
	public function __toString()
	{
		return "This is result of __toString() method: " . serialize($this);
	}
}

$throusers = new shopping_item('Jeans');
$throusers->price = 1234;

//echo $throusers;

echo $throusers->price;
echo $throusers->name;





class shoes extends shopping_item
{
	public $sizes;
	
	public function __construct($name)
	{
		parent::__construct($name);
		$this->sizes = range(33, 47);
	}
}

$red_shoes = new shoes('Red shoes');
$red_shoes->price = 900;

//echo $throusers;

echo $red_shoes->price;
echo $red_shoes->name;