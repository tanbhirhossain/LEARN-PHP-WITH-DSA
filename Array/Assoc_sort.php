<?php 

$arr = [
    'one' => '1+0',
    'two' => '2+0',
    'three' => '3+0',
    'four' => '4+0',
    'five' => '5+0',
    'six' => '6+0'
];

print_r($arr);

//sort($arr); // USING sort() IN ASSOC ARRAY IT WILL sort y value but REPLACE THE ASSOC KEY WITH INDEX LIKE 0,1,2,3

asort($arr); // USED ON ASSOC ARRAY TO SORT by value

// ksort($arr); //USING ksort() IN ASSOC array, it will sort by key


print_r($arr);



