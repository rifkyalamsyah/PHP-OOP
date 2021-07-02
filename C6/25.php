<?php

// Interface Incherement

// data/Car.php 
// Example 

namespace Data;

// Interface Incherement
interface HasBrand
{
    function getBrand(): string;
}

interface IsMaintenance
{
    function isMaintenance(): bool;
}

// Interface
// Interface Incherement
interface Car extends HasBrand
{
    function drive(): void;
   
    function getTire(): int;

}

// Inplement Interface
// Multiple Interface Incherement
class Avanza implements Car, isMaintenance
{
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "Toyota";
    }

    public function isMaintenance(): bool
    {
        return false;
    }
}


// Mengakses Interface Inheritace
// Interface.php
// Example
/*
require_once "data/Car.php";
use Data\{Avanza};

$car = new Avanza();
$car->drive();
*/