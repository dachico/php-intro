<?php
/* --- PHP Data Types --- */

/*
- String: Series of characters surronded by quotes
- Integer: Whole numbers
- Float: Decimal numbers
- Boolean: true or false
- Array: Special variable, which can hold more than one values
- Object: A class
- Null: Empty variable
- Resource: Special variable that holds a resource
*/

/* --- Variable Rules --- */
/*
- Variables must be prefixed with $
- Varibles must start with a letter or the underscore character
- Varibles cant start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different varibles)
*/

$name = 'Brad'; // String
$age = 40; //Int
$has_kids = true; // Boolean
$cash_on_hand = 20.75; // Float


// echo $name;
// echo $age;
// echo $has_kids; // if true prints one , if not we dont see nothing
// var_dump($has_kids);
// var_dump($cash_on_hand);
// echo $name . ' is ' . $age . ' years old';

// echo "$name is $age years old"; // with double queots you can put the variables right in without using the .

$x = '5' + '5';
var_dump($x);
echo 10 - 5;
echo 5 * 6;
echo 10 / 2;
echo 10 % 3;

// define() - create constants
// the name first the value second
define('HOST', 'localhost');
define('DB_NAME', 'MongoDB');

echo HOST;
echo DB_NAME;

?>