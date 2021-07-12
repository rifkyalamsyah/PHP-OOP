<?php

// Import

require_once "data/Conflict.php";
require_once "data/Helper.php";

// Import Namespace
use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict = new Conflict();
$conflict = new \Data\Two\Conflict();

helpMe();

echo APPLICATION . PHP_EOL;

