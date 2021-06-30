<?php

// Type Check & Casts
// data/Programmer.php

// Example
class Programmer 
{
    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer
{

}

class FrontendProgrammer extends Programmer
{

}

class Company
{
    public Programmer $programmer;
}

// Type Check & Casts
function sayHelloProgrammer(Programmer $programmer)
{
    if ($programmer instanceof BackendProgrammer) {
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof FrontendProgrammer) {
        echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
    
}


// Mengakses Type Check & Casts
// Polymorphism.php
// Example
/*
require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Rifky");
var_dump($company);

$company->programmer = new BackendProgrammer("Rifky");
var_dump($company);

$company->programmer = new FrontendProgrammer("Rifky");
var_dump($company);

sayHelloProgrammer(new Programmer("Rifky"));
sayHelloProgrammer(new BackendProgrammer("Rifky"));
sayHelloProgrammer(new FrontendProgrammer("Rifky"));
*/