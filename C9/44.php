<?php

// Convariance

// data/AnimalShelter.php 
// Example
namespace Data;

require_once "data/Animal.php";

interface AnimalShelter
{
    function adopt(string $name): Animal;
}

class CatShelter implements AnimalShelter
{
    public function adopt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShelter implements AnimalShelter
{
    public function adopt(string $name): Dog
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}


// Mengakses Covariance
// Covariance.php 
// Example 
/*
// Convariance

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("Luna");

$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adopt("Doggy");
*/