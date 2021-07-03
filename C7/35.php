<?php

// Static Keyworrd
// Static Properties
// Static Function

// helper/MathHelper.php 
// Example
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

// Cara mengakses Static Keyword, Static Properties, Static Function.
// Static.php
// Example
/*
require_once "helper/MathHelper.php";

use Helper\MathHelper;

// Cara yg Benar
echo MathHelper::$name;

// Jika mau diubah
MathHelper::$name = "Rifky Alamsyah";
echo MathHelper::$name . PHP_EOL;
// Maka akan secara otomatis berubah

// Jika tidak ingin di rubah maka jangan menggunakan properties 
// buat constant saja agar tidak bisa siubah

------------------------------------------------

// cara yg Salah
// Tidak Bisa mengakses dengan cara ini
// $mathHelper = new MathHelper();
// echo $mathHelper->name . PHP_EOL;

-------------------------------------------------

// Mengakses Static Function
$result = MathHelper::sum(10, 10, 10, 10, 10);
echo "Result : $result" . PHP_EOL;
*/


