<?php

// Visibility

class Product
{
    // Private
    /*
    private string $name;
    private int $price;
    */

    // Agar bisa di akses 
    // oleh function ProductDummy
    protected string $name;
    protected int $price;


    // Public
    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // Public
    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}

class ProductDummy extends Product
{
    public function info()
    {
        echo "Name $this->name" . PHP_EOL;
        echo "Price $this->price" . PHP_EOL;
    }
}


// Mengakses Visibility
// Dari luar ke Product.php
// Example
/*
require_once "data/Product.php";

$product = new Product("Apple", 10000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Dummy", 5000);
$dummy->info();
*/