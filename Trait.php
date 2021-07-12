<?php

// Trait

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
