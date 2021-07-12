<?php

// Polymorphism

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