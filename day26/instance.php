<?php

class country
{
    public static $current_country = null;

    public $name = null;
    public $continent = null;
    public $call_prefix = null;
}

function setCurrentCountry()
{
    $cz = new country();
    $cz->name = 'Czechia';
    $cz->call_prefix = '0042';

    country::$current_country = $cz;

} // function ends, all variables are deleted, including $cz


function getCurrentCountry()
{
    return country::$current_country;
}