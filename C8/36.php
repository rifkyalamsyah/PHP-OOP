<?php

// stdClass

$array = [
    "firstName" => "Rifky",
    "middleName" => "Alam",
    "lastName" => "syah"
];

// Konversi Array kestdClass
$object = (object)$array;
var_dump($object);

echo "Firsh Name $object->firstName" . PHP_EOL;
echo "Middle Name $object->middleName" . PHP_EOL;
echo "last Name $object->lastName" . PHP_EOL;

$arrayLagi = (array) $object;
var_dump($arrayLagi);

// Mengkonversi Array
require_once "data/Person.php";

$person = new Person("Rifky", "Jogja");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);



// data/Person.php 
// Example
/*

// class
class Person
{
    // Constant
    const AUTHOR = "Belajar PHP OOP";

    // Peroperties
    var string $name;
    var string $address;
    var string $country = "Indonesia";

    // Constuctor
    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

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

    // Self Keyword
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
*/