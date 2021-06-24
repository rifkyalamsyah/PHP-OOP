<?php

// This Properties

// Example
// Class
class Person
{
    // Peroperties
    var string $name;
    var string $address;
    var string $country = "Indonesia";

    // function
    function sayHello(?string $name)
    {
        //This Properties
        if(is_null($name)){
            echo "Hi, My name is $this->name" . PHP_EOL;
        }else{
            echo "Hi $name, My name is $this->name" . PHP_EOL;
        }
        // echo "Hello $name" . PHP_EOL;
    }
}

// Example 2
// menampilkan/memanggil function menggunakan this peroperties
require_once "data/Person.php";

$person = new Person();
$person->name = "Rifky"; // Menampilkan menggunakan this properties

// Example 3
$rifky = new Person();
$rifky->name = "Rifky"; // Menampilkan menggunakan this properties
$rifky->sayHello(null);

$rifky = new Person();
$rifky->name = "Manda"; // Menampilkan menggunakan this properties
$rifky->sayHello(null);