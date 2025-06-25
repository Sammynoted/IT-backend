<?php
$a = readline("input your a value(if empty enter 0). ");
$b = readline("input your b value(if empty enter 0). ");
$c = readline("input your c value(if empty enter 0). ");


$root = sqrt((pow($b, 2)) - (4 * $a * $c)); // finding the squareroot

$solution1 = round((-$b + $root) / (2 * $a), 2); // checking using + operator and rounding it up to 2 decimal places

$solution2 = round((-$b - $root) / (2 * $a), 2);  // checking using - operator and rounding it up to 2 decimal places

echo "$solution1 or $solution2" ;
