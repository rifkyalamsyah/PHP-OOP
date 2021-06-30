<?php

// Polymorphism

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


function sayHelloProgrammer(Programmer $programmer)
{
    echo "Hello Programmer $programmer->name" . PHP_EOL;
}



// Mengakses Polymorphysm
// Polymorphysm.php
// example
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
*?