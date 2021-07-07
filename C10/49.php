<?php

// Format Time

// Date Time
$dateTime = new DateTime();
$dateTime->setDate(1999, 10, 3);
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
