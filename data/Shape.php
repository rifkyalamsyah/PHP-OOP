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