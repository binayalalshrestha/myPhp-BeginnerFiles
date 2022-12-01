<?php

echo "Associative arrays in PHP <br>";
/*
$arr = array ('this', 'that', 'what'); this is an indexed array
echo $array[0];
echo $array[1];
echo $array[2];
*/

// Associative arrays
$favCol = array(
    'Shubham' => 'Maroon',  //this is an associative array
    'Rohan' => 'Black',
    'Harry' => 'Green',
);

// echo $favCol['Harry'];
// echo "<br>";
// echo $favCol['Shubham'];
// echo "<br>";

foreach ($favCol as $key => $value) {
    echo "<br>Fav color of $key is $value <br>";
}



?>