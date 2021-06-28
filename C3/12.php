<?php

// Inheritance
// Pewarisan

// Example
// data/Manager.php
class Manager
{
    var string $name;

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is $this->name" . PHP_EOL;
    }
}


class VicePresident extends Manager {

}

// Inheritance
// Mengakses Method Parent
// Inheritance.php
// Example
require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Rifky";
$manager->sayHello("Manda");

$vp = new VicePresident();
$vp->name = "Nima";
$vp->sayHello("Manda");
