<?php

// Destructor

// example
class Person
{
   
    const AUTHOR = "Belajar PHP OOP";

   
    var string $name;
    var string $address;
    var string $country = "Indonesia";

  
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

    // Destructor
    function __destruct()
    {
        echo "Object Person $this->name is destroyed" . PHP_EOL;
    }
}


// Distructor memenggil ke Person.php
// Distructor.php
require_once "data/Person.php";

$rifky = new Person("Rifky", "Jogja");
$manda = new Person("Manda", "Jakarta");

echo "Program Selesai" . PHP_EOL;