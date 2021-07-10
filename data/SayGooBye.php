<?php

// Trait

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


// Trait Overriding
// Trait Abstract Function
trait CanRun
{
    public abstract function run(): void;
}


// Trait Override
// Parent Person
class ParentPerson {
    public function goodBye(?string $name): void
    {
        echo "Good Bye in Person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in Person" . PHP_EOL;
    }
}

// Trait Inheritance
trait All {
    use SayGoodBye, SayHello, HasName, CanRun {

        // Trait Visibility Override
        // Bisa di Override
        /*
        hello as private;
        goodBye as private;
        */
    }
}


// Menggunakan Trait & Trait Properties
// Person
class Person extends ParentPerson
{
   use All; // Trait Inheritance

    // Trait Overriding
    // Trait Abstract Function
    public function run(): void
    {
        echo "Person $this->name is runing" . PHP_EOL;
    }


    // Trait Override
    // Example 
    /*
    public function goodBye(?string $name): void
    {
        echo "Good Bye in Person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in Person" . PHP_EOL;
    }
    */
}



