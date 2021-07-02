<?php

// Trait Overriding
// Trait Abstract Function

// data/SayGoodbye.php 
// Example

namespace Data\Treits;

use Data\Treits\CanRun as TreitsCanRun;

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


// Trait Overriding
// Trait Abstract Function
trait CanRun
{
    public abstract function run(): void;
}


// Menggunakan Trait & Trait Properties
class Person
{
    use SayGoodBye, SayHello, HasName, CanRun;

    // Trait Abstract Function
    // Override Function
    public function run(): void
    {
        echo "Person $this->name is runing" . PHP_EOL;
    }
}



// Mengakses Trait Abstruct Function
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


// Trait Overriding
// Trait Abstract Function
$person->run();
*/


