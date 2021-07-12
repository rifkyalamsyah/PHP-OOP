<?php 

// Static Keyword
// Static Properties
// Static Function

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


// cara yg Salah
// Tidak Bisa mengakses dengan cara ini
/*
$mathHelper = new MathHelper();
echo $mathHelper->name . PHP_EOL;
*/



// Mengakses Static Function
$result = MathHelper::sum(10, 10, 10, 10, 10);
echo "Result : $result" . PHP_EOL;