<?php

echo "Scppe, Local and Global in PHP <br>";

$a = 98; //Global variable
$b = 99;

function printValue(){
    //$a = 97; //Local variable
    global $a, $b;//Give me the access to this global variable
    $a = 500;
    $b = 1000;
    echo "The value of your variable a is $a and b is $b ";
}
 //echo $a;
 printValue();
 echo "<br> The value of your variable a is $a and b is $b";
 echo "<br>";
 // echo var_dump($GLOBALS); prints all the global variables
 echo var_dump($GLOBALS["a"]);
 echo var_dump($GLOBALS["b"]); 
?>