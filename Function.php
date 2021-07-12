<?php

// Function

require_once "data/Person.php";

$person = new Person("Rifky", "Jogja");
$person->name = "Rifky"; // Menampilkan menggunakan this properties

// Memanggil Function di Object.php
$person->sayHello("Rifky");

// Example 2
$rifky = new Person("Rifky", "Jogja");
$rifky->name = "Rifky"; // Menampilkan menggunakan this properties
$rifky->sayHello(null);

$manda = new Person("Manda", "Jakarta");
$manda->name = "Manda"; // Menampilkan menggunakan this properties
$manda->sayHello(null);

// Mengakses/Menampilkan Self Keyword
$rifky->info();
$manda->info();
