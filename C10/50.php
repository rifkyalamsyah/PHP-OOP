<?php

// Parse Date Time


// Date Time
$dateTime = new DateTime();
$dateTime->setDate(1999, 10, 03);
$dateTime->setTime(10, 10, 10, 0);

// Date Interval
// Menambah Tahun
$dateTime->add(new DateInterval("P1Y")); 

// Mengurangi Bulan 
$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);

var_dump($dateTime);

// Date Time Zone
$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("America/New_York"));
var_dump($now);

// Format Time
$string = $now->format("Y-m-d H:i:s");
echo "Waktu Saat Ini : $string" . PHP_EOL;

// Parse Date Time
$date = DateTime::createFromFormat("Y-m-d H:i:s", "2021-09-03 10:10:10", new DateTimeZone("Asia/Jakarta"));
if ($date){
    var_dump($date);
} else {
    echo "Format Salah" . PHP_EOL;
}
