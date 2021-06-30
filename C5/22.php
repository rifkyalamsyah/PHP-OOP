<?php

// Abstract Function
// data/Animal.php

// Example
namespace Data;

abstract class Animal
{
    public string $name;
    //Abstract Function
    abstract public function run(): void;
}

class Cat extends Animal
{
    public function run(): void
    {
        echo "Cat $this->name is runnig" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name is runnig" . PHP_EOL;
    }
}



// Mengakses Abstruct Function
// AbstructFunction.php
// Example
/*
require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Pet";
$cat->run();

$dog = new Dog();
$dog->name = "Doggy";
$dog->run();
*/