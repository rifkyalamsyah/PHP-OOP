<?php

// Getter and Setter
// Encapsulation

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

