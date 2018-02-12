<?php

$nr_of_dogs = 0;

class dog
{
  public $color = 'unspecified';

  public static $nr_of_dogs = 0;

  public function bark()
  {
    echo "WOOF!";
  }

  public static function get_nr_of_dogs()
  {
    return static::$nr_of_dogs;
  }

  public function __construct()
  {
    static::$nr_of_dogs++;
  }

  /**
   * things that should be done after a dog object
   * is destroyed (clean up)
   */
  public function __destruct()
  {
    static::$nr_of_dogs--;
  }
}

$my_dog = new dog(); // dog::$nr_of_dogs increased by 1
$toms_dog = new dog();

// because it's public I can access the static property from anywhere
echo dog::$nr_of_dogs;

$my_dog->bark();
$toms_dog->bark();

unset($my_dog);

echo dog::get_nr_of_dogs();