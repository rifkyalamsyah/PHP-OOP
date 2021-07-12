<?php

// Object Iteration
// Iterator

class Data implements IteratorAggregate
{ 
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $forth = "Forth";

    // Iterator
    // Exmple Menggunakan Iterator
    /*
    public function getIterator()
    {
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "forth" => $this->forth,
        ];

        return new ArrayIterator($array);
    }
    */

    // Generator 
    // Example menggunakan yield
    public function getIterator()
    {
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "forth" => $this->forth;
    }
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}