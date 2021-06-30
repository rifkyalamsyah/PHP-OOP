<?php

// Abstract Class

namespace Data;

use Locale;

abstract class Location
{
    public string $name;
}

class City extends Location
{

}

class Province extends Location
{

}

class Country extends Location
{

}


// Mengakses Abstract Class
// AbstractClass.php
// Example
/*
require_once "data/Location.php";

use Data\{Location, City, Province, Country};

// $Location = new Location(); Akan ERROR

$city = new City();
$province = new Province();
$country = new Country();
*/