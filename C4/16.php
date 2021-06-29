<?php

// Function Overriding

// Example di Manager.php
class Manager
{
    var string $name;

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }
}

// Function Overriding
class VicePresident extends Manager
{
    function sayHello(string $name): void
    {
        echo "Hi $name, my name is VP $this->name" . PHP_EOL;
    }
}


// Mengakses/Memanggil Function Overriding
// Dari FunctionOverriding ke data\Manager.php
// Example
/*
// Function Overriding
require_once "data/Manager.php";

$manager = new Manager;
$manager->name = "Rifky";
$manager->sayHello("Manda");

$vp = new VicePresident();
$vp->name = "Rifky";
$vp->sayHello("Manda");
*/