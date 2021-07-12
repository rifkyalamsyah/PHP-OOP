<?php

// Overloading
// Properties Overloading

class Zero 
{
    private array $properties = [];

    /*
    public string $firstName = "Rifky";
    */

    // __get() untuk mengambil data berdasarkan prpperty name nya
    public function __get($name)
    {
        // echo "Access property $name" . PHP_EOL;
        // return "CONTOH";
        return $this->properties[$name];
    }

    // __set() untuk mengubah data berdasarkan prpperty name nya
    public function __set($name, $value)
    {
        // echo "Set property $name with value $value" . PHP_EOL;
        $this->properties[$name] = $value;
    }

    // __isset() untuk mengecek data apakah berdasarkan prpperty name nya
    public function __isset($name): bool
    {
        // echo "Isset $name";
        // return false;
        return isset($this->properties[$name]);
    }

    // __unset() untuk mengunset data berdasarkan prpperty name nya
    public function __unset($name)
    {
        // echo "Unset $name";
        unset($this->properties[$name]);
    }


    // Function Overloading
    // __call()
    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }

    // __callstatic
    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call static function $name with arguments $join" . PHP_EOL; 
    }
}


// Cara Memanggil/Mengakses 

$zero = new Zero();
// __get()
// echo $zero->firstName . PHP_EOL;
// echo $zero->middleNmae . PHP_EOL;

// __set
// $zero->firstName = "Rifky";

// __isset()
// isset($zero->firstName);

// __unset()
// unset($zero->firstName);

$zero->firstName = "Rifky";
$zero->middleName = "Alam";
$zero->lastName = "Syah";

echo "First Name : $zero->firstName" . PHP_EOL;
echo "Middle Name : $zero->middleName" . PHP_EOL;
echo "Last Name : $zero->lastName" . PHP_EOL;

// Memanggil/Mengakses Function Overloading
$zero->sayHello("Rifky", "Alamsyah");
// call static
Zero::sayHello("Rifky", "Alamsyah");