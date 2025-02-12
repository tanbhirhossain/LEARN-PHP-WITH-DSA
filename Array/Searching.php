<?php


$fruits = ['Banana', 'Apple', 'Orange', 'Strawberry', 'Mango'];

//Search
$key = array_search('Orange', $fruits); // array_search return the index of array
var_dump($key);

//check

$exists = in_array('Banana', $fruits);
var_dump($exists); // return bool





