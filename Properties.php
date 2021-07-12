<?php

// Contoh Properties

require_once "data/Person";

$person = new Person("Rifky", "Jogja");
$person->name = "Rifky";
$person->address = "Yogyakarta";
$person->country = "Indonesia";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

// Person ke 2
$person2 = new Person("Manda", "Jakarta");
$person2->name = "Manda";
$person2->address = "Jakarta";
$person2->country = "Indonesia";

var_dump($person2);