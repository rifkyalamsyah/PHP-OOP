<?php

// Parent Keyword

namespace Data;

class Shape
{
    public function getCorner()
    {
        return 0;
    }
}

class Rectangle extends Shape
{
    public function getCorner()
    {
        return 4;
    }

    
    // Parent Keyword
    public function getParentCorner()
    {
        return parent::getCorner();
    }
}



// Mengakses/Menampilkan Parent Keyword
// Dari Parent ke data/Shape.php
// Example
/*
require_once "data/Shape.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL;
echo $rectangle->getParentCorner() . PHP_EOL;
*/