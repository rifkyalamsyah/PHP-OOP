<?php

// Inheritance
// Mengakses Method Parent
require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Rifky";
$manager->sayHello("Manda");

$vp = new VicePresident();
$vp->name = "Nima";
$vp->sayHello("Manda");
