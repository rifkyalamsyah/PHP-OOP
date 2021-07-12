<?php

// Magic Function
// __toString() Function

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Rifky";
$student1->value = 100;

$string = (string) $student1;
echo $string . PHP_EOL;

// Bisa juga seperti ini
echo $student1 . PHP_EOL;