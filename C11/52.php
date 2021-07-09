<?php

// Regular Expression

$matches = [];

// preg_matsh_all()
$result = preg_match_all("/rifky|alam|syah/i", "Rifky Alamsyah", $matches);

var_dump($result);
var_dump($matches);

// preg_replace()
$result = preg_replace("/anjing|bangsat/i", "***", "Dasar lu ANJING dan Bangsat");

var_dump($result);

// preg_split()
$result = preg_split("/[\s,-]/", "Rifky Alamsyah,UI/UX Designer,and Software Enginer");

var_dump($result);

