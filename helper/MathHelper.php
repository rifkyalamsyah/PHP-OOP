<?php

// Static Keyword
// Static Properties
// Static Function

namespace Helper;

class MathHelper
{
    // Static Properties
    static public string $name = "MathHelper";

    // StaticFunction
    static public function sum(int... $number): int
    {
        $total = 0;
        foreach ($number as $number) {
            $total += $number;
        }
        return $total;
    }
}