<?php
/*
--- For Loop --
for (initialize; condition; increment) {
// code to execute
}
*/

// for ($x = 0; $x <= 10; $x++) {
//     echo 'Number ' . $x . '<br>';
// }
// for ($x = 0; $x <= 10; $x++) {
//     echo "Number  $x <br>";
// }

// While Loop
// $x = 1;

// while ($x <= 15) {
//     echo "Number $x <br>";
//     $x++;
// }

// Do While Loop
// $x = 1;

// do {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// } while ($x <= 5);

// Foreach loop

/* Foreach loop syntax
foreach ($array as $value0) {
// code to execute
}
*/

$posts = ['First post', 'Second post', 'Third post'];
// for($x = 0; $x < count($posts); $x++) {
//     echo $posts[$x];
// }

/* For each loop */

// foreach($posts as $post) {
//     echo $post;
// }
/* Foreach loop with index */

// foreach($posts as $index => $post) {
//     echo $index . ' - ' . $post . '<br>';
// }

$person = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com'
];

foreach($person as $key => $value) {
    echo $key . ' - ' . $value . '<br>';
}



?>