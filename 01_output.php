<?php
// echo - output strings, numbers, html, etc
//  echo 'Hello';

 // print - works like echo , but can only take in a single argument
//  print 123;

 // print_r() - print single values and arrays, is a funciton
    // print_r([1,2,3]);

// var_dump() - Returns more info like data type and length
    // var_dump('Hello');

// var_export() - Similiar to var_dump(). Outputs a string representation of a variable
// var_export('Hello')

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'Post One'; ?></h1>
    <!-- <h1><?='Post Two'; ?></h1> -->
</body>
</html>