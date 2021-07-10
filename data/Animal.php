<?php

// Abstract Function
// Contravariance

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