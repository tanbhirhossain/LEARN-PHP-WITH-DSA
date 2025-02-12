<?php 

$odd = [1,3,5,7,9];
$even = [2,4,6,8,10];

$merge = array_merge($odd, $even);
sort($merge);
print_r($merge);

$sliced = array_slice($merge, 0,5);
print_r($sliced);