<?php

// Interface

// data/Car.php 
// Example
namespace Data;

interface Car
{
    function drive(): void;
   
    function getTire(): int;

}

// Inplement Interface
class Avanza implements Car {
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }
}


// Mengakses Interface
// Interface.php
// Example
/*
require_once "data/Car.php";
use Data\{Avanza};

$car = new Avanza();
$car->drive();
*/