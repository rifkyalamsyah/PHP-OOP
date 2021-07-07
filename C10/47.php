<?php

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