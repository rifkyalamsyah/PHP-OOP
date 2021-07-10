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


