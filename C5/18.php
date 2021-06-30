<?php

// Constructor Overriding
// Example
// data/Manager.php

class Manager
{
    var string $name;

    var string $title;

    // Construct Overriding
    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }
}

// Function Overriding
class VicePresident extends Manager
{

    // Construct Overriding
    public function __construct(string $name = "")
    {
        // tidak wajib tapi direkomendasikan
        parent::__construct($name, "VP");
    }

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is VP $this->name" . PHP_EOL;
    }
}




// Mengakses Construcor Overriding
// FunctionOverriding.php
// Example
/*
require_once "data/Manager.php";

$manager = new Manager;
$manager->name = "Rifky";
$manager->sayHello("Manda");

$vp = new VicePresident();
$vp->name = "Rifky";
$vp->sayHello("Manda");
*/
