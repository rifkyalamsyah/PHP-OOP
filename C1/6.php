<?php

// Function
// Example

// class
class Person
{
    // Peroperties
    var string $name;
    var string $address;
    var string $country = "Indonesia";

// Membuat Function di Person.php

    // function
    function sayHello(string $name)
    {
        echo "Hello $name" . PHP_EOL;
    }
}


// Memanggil Function 
// hanya cukup memanggil nama function nya saja
// Example
$person->sayHello("Rifky");
