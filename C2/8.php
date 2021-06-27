<?php

// Constant

require_once "data/Person.php";

define("APLICATION", "Belajar PHP OOP");
const APP_VERSION = "1.0.0";

echo APLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

// Mengakses Constan di dalam Class
echo Person::AUTHOR . PHP_EOL;


// Constant di dalam class Person.php
// Example
class Person
{
    // Constant
    const AUTHOR = "Belajar PHP OOP";

    var string $name;
    var ?string $address;
    var string $country = "Indonesia";
}