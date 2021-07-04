<?php

// Object Cloning

// data/Student.php 
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


// Mengakses Object Cloning
// ObjectCloning.php
// Example
/*
// Object Cloning
// __clone Ffunction

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Rifky";
$student1->value = 100;
$student1->setSemple("XXX");

var_dump($student1);

// Cloning
// Cara Clone Secara Otomatis
$student2 = clone $student1;
var_dump($student2);


// Cara Manual Clone
/*
$student2 = new Student();
$student2->id = $student1->id;
$student2->name = $student1->name;
$student2->value = $student1->value;
*/


// __clone Function
// Alur function clone
// Example
/* 
    $student1 => clone $student2 => $student2->__clone() 
*/
