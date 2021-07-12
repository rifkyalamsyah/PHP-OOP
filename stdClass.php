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