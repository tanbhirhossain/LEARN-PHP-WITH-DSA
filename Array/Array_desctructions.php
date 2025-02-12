<?php 

$colors = ['red', 'green', 'blue'];

list($a, $b, $c) = $colors;
[$a, $b, $c] = $colors;

print_r($colors);

echo $a;