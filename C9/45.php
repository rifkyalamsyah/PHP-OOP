<?php

// Contravariance

// Food.php
// Example
/*
// Contravariance

namespace Data;

// Inheritance
class Food
{
   
}

class AnimalFood extends Food
{

}
*/

/**--------------------------------------------------------------*/

// Abstract Function
// Contravariance
// Animal.php 
// Example

namespace Data;

require_once "Food.php";

abstract class Animal
{
    public string $name;

    // Abstract Function
    abstract public function run(): void;

    // Invariance
    abstract public function eat(AnimalFood $animalFood): void;
}

class Cat extends Animal
{
    public function run(): void
    {
        echo "Cat $this->name is runnig" . PHP_EOL;
    }

    public function eat(AnimalFood $animalFood): void
    {
        echo "Cat is eating" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name is runnig" . PHP_EOL;
    }

    // Contravariance
    public function eat(Food $animalFood): void
    {
        echo "Dog is eating" . PHP_EOL;
    }
}


/**--------------------------------------------------------------*/

// Mengakses Contravariance
// Convariance.php
// Example
/*
// Convariance
// Contravariance

require_once "data/Food.php";
require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("Luna");
$cat->eat(new \data\AnimalFood());

$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adopt("Doggy");
$dog->eat(new \data\Food());
*/