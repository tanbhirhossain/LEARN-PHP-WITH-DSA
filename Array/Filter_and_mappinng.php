<?php 

$numbers = [0,1,2,3,4,5,6,7,8,9];

$evenNumbers = array_filter($numbers, function($n){
   return $n % 2 == 0;
});

print_r($evenNumbers);

$oddNumbers = array_filter($numbers, function($n){
    return $n % 2 != 0;
});

print_r($oddNumbers);

$sqrtNumber = array_map(function($n){
    return $n * $n;
}, $numbers);

print_r($sqrtNumber);

$cubicNumber = array_map(function($n){
    return $n * ($n*3);
}, $numbers);

print_r($cubicNumber);