<?php

// Trait

// data/SayGoodBye.php 
// Example
namespace Data\Treits;

trait SayGoodBye
{
    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

// Trait Properties
trait HasName
{
    // Property
    public string $name;
}


// Menggunakan Trait & Trait Properties
class Person
{
    use SayGoodBye, SayHello, HasName;
}




// Mengakses Trait
// Trait.php
// Example
/*
require_once "data/SayGooBye.php";

use Data\Treits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodbye("Manda");
$person->hello("Rifky");

// Trait Properties
$person->name = "Rifky";
var_dump($person);
*/
