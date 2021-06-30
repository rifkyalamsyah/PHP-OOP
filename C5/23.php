<?php

// Getter and Setter
// Encapsulation

// data/Category.php
// Example
class Category
{
    // Property
    private string $name;
    private bool $expensive;

    // Getter
    public function getName(): string
    {
        return $this->name;
    }

    // Setter
    public function setName(string $name): void
    {
        // Validation di Setter
        if(trim($name) != "") {
            $this->name = $name;
        }
    }

    // Expensive
    public function isExpensive(): bool
    {
        return $this->expensive;
    }
    
    // SetExpemsive
    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive; 
    }
    
}



// Mengakses Getter and Setter
// GetterAndSetter.php
// Example
/*
require_once "data/Category.php";

$category = new Category();
$category->setName("Handphone");
$category->setExpensive(true);

$category->setName("");
echo "Name : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;
*/