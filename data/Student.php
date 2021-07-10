<?php

// Object Cloning
// Magic Function 

class Student 
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSemple(string $sample): void
    {
        $this->sample = $sample;
    }

    // __clone() Function
    public function __clone()
    {
        unset($this->sample);
    }

    // __toString() Function
    public function __toString()
    {
        return "Student id:$this->id, name:$this->name, value:$this->value";
    }

    // __invoke() Function
    public function __invoke(...$arguments): void
    {
        $join = join(",", $arguments);
        echo "Invoke student with arguments $join" . PHP_EOL;
    }

    // __debuginfo() Function
    public function __debugInfo()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "Rifky",
            "version" => "1.0"
        ];
    }
}



