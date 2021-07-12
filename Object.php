<?php

// Object

require_once "data/Person";

$person = new Person("Rifky", "Jogja");
$person->name = "Rifky";
$person->address = "Yogyakarta";
$person->country = "Indonesia";

var_dump($person);

// Memanggil Function di Person.php
$person->sayHello("Rifky");