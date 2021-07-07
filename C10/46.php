<?php

// Date Time

$dateTime = new DateTime();
$dateTime->setDate(2000, 9, 3);
$dateTime->setTime(10, 10, 10, 0);

var_dump($dateTime);