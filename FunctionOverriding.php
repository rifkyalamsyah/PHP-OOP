<?php

// Function Overriding
require_once "data/Manager.php";

$manager = new Manager;
$manager->name = "Rifky";
$manager->sayHello("Manda");

$vp = new VicePresident();
$vp->name = "Rifky";
$vp->sayHello("Manda");