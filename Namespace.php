<?php

// Namespace
// Memankses/Memanggil Namespace
require_once "data/Conflict.php";
require_once "data/Helper.php";

$conflict1 = new Data\One\Conflict();
$conflict2 = new Data\Two\Conflict();

// Mengakses Helper
echo Helper\APPLICATION . PHP_EOL;

Helper\helpMe();


// Example
// Global Namespace
/* namespace {

    require_once "data/Conflict.php";
    require_once "data/Helper.php";

    $conflict1 = new Data\One\Conflict();
    $conflict2 = new Data\Two\Conflict();

    // Mengakses Helper
    echo Helper\APPLICATION . PHP_EOL;

    Helper\helpMe();
}/*