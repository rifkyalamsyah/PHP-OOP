<?php

// Self Keyword

// Example
// class
class Person
{
    
    const AUTHOR = "Belajar PHP OOP";

    
    var string $name;
    var string $address;
    var string $country = "Indonesia";

    
    function sayHello(?string $name)
    {
        
        if(is_null($name)){
            echo "Hi, My name is $this->name" . PHP_EOL;
        }else{
            echo "Hi $name, My name is $this->name" . PHP_EOL;
        }
        
    }

    // Self Keyword
    function Info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }
}

// Example
// Mengakses/Menampilkan Self Keyword
// dari Function.php
$rifky->info();
$manda->info();