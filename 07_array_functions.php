<?php
$fruits = ['apple', 'orange', 'pear'];

// Get length
// echo count($fruits);

// Search array
// var_dump(in_array('apple', $fruits));

// Add to array
// Add to the end of the array
$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'strawberry');
// Add to the start of the array
array_unshift($fruits, 'mango');

// Remove from array
// remove from the end of the array
array_pop($fruits);
// remove from the start of the array
array_shift($fruits);
// remove a specific element
// unset($fruits[2]); // also remove the index of the deleted element

// Split into 2 chunks
// $chunked_array = array_chunk($fruits, 2);
// print_r($chunked_array);


// print_r($fruits);

$arr1 = [1,2,3];
$arr2 = [4,5,6];
// merge / concat arrays
$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];

// print_r($arr3);
// print_r($arr4);

$a = ['green', 'red', 'yellow'];
$b = ['avacado', 'apple', 'banana'];
// create key value pairs from 2 arrays
$c = array_combine($a, $b);

// print_r($c)

$keys = array_keys($c);
// print_r($keys);

// flip the keys and the values
$flipped = array_flip($c);
// print_r($flipped);

$numbers = range(1, 20); // gives an array from 1-20
// print_r($numbers);

$newNumbers = array_map(function($number) {
    return "Number $number";
}, $numbers);

// print_r($newNumbers);

$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);

// print_r($lessThan10);

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

var_dump($sum);

?>