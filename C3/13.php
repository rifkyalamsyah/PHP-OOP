<?php

// Namespace

// Example 1
// Jika nama class sama maka akan Error
// class Conflict {

// }

// clas Conflict {

// }


// Namespace
// Membuat Namespace
// Example 2
namespace Data\One {
    class Conflict
    {

    }
}

namespace Data\Two {
    class Conflict
    {
        
    }
}

// Example
// Global Namespace
/* namespace {

    require_once "data/Conflict.php";
    require_once "data/Helper.php";

    $conflict1 = new Data\One\Conflict();
    $conflict2 = new Data\Two\Conflict();

    echo Helper\APPLICATION . PHP_EOL;

    Helper\helpMe();
}/*