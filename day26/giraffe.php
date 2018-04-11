<?php

class giraffe
{
    public static $nr_of_giraffes = 0;

    public $is_hungry = true;
    public $is_thirsty = true;
    public $name = null;

    public function __construct($name)
    {
        // give the giraffe the given name
        $this->name = $name;

        // raise the global number of giraffes by 1
        static::$nr_of_giraffes++;
    }

    public function feed()
    {
        $this->is_hungry = false;
    }

    public function drink()
    {
        $this->is_thirsty = false;
    }

    /**
     * finds out if a giraffe is happy
     * 
     * happy means not hungry nor thirsty
     * @return boolean happy / not happy
     */
    public function isHappy()
    {
        return !$this->is_thirsty && !$this->is_hungry;
    }
}