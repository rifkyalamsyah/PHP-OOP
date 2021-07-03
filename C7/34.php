<?php 

// Anonymous Class

interface HelloWorld
{
    function sayHello(): void;
}

// Anonymous Class
$helloWorld = new class ("Rifky") implements HelloWorld {
    // Constructor di Anonymous Class
    public string  $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "Hello World $this->name" . PHP_EOL;
    }
};

$helloWorld->sayHello();