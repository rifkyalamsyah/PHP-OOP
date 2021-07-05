<?php

// Magic Function 

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

    // __clone() Function
    public function __clone()
    {
        unset($this->sample);
    }

    // __toString() Function
    public function __toString()
    {
        return "Student id:$this->id, name:$this->name, value:$this->value";
    }

    // __invoke() Function
    public function __invoke(...$arguments): void
    {
        $join = join(",", $arguments);
        echo "Invoke student with arguments $join" . PHP_EOL;
    }

    // __debuginfo() Function
    public function __debugInfo()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "Rifky",
            "version" => "1.0"
        ];
    }
}


// Mengakses Magic Function
// __toString() Function
// Example
/*
require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Rifky";
$student1->value = 100;

$string = (string) $student1;
echo $string . PHP_EOL;

// Bisa juga seperti ini
echo $student1 . PHP_EOL;



// Mengakses Magic Function
// __invoke() Function

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Rifky";
$student1->value = 100;

$student1(1, "Rifky", true, "Alamsyah");


// Mengakses Magic Function
// __debuginfo() Function

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Rifky";
$student1->value = 100;
$student1->setSemple("SAMPLE");

var_dump($student1);
*/


