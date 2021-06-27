<?php

// Constructor
// __construct

// Example
// class
class Person
{
    
    const AUTHOR = "Belajar PHP OOP";

    
    var string $name;
    var string $address;
    var string $country = "Indonesia";

    // Constuctor
    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    
    function sayHello(?string $name)
    {
        
        if(is_null($name)){
            echo "Hi, My name is $this->name" . PHP_EOL;
        }else{
            echo "Hi $name, My name is $this->name" . PHP_EOL;
        }
        
    }

    
    function Info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }
}


// Mengakses/Menampilkan Constructor
// di class Person.php
require_once "data/Person.php";

$rifky = new Person("Rifky", "Jogja");