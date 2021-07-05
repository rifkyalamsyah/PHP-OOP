<?php

// Comparing Object


// data/Student.php 
// Object Cloning
// Example

class Student 
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSemple(string $sample): void
    {
        $this->sample = $sample;
    }

    // __clone Function
    public function __clone()
    {
        unset($this->sample);
    }
}



// Mengakses Comparing Object
// Comparing Object
// Example
/*
require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Rifky";
$student1->value = 100;

$student2 = new Student();
$student2->id = "1";
$student2->name = "Rifky";
$student2->value = 100;

var_dump($student1 == $student2 );
var_dump($student1 === $student2 );
var_dump($student1 === $student1 );
*/