<?php

/*
Data types in PHP
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. Null
*/

// String - sequence of characters
$name = "Binay";
$friend = "Lishal";
echo "$name ko sathi is $friend";



// Integer - non decimal number
$salary = 500;

$debt = 100;

echo $salary;
echo "<br>";
echo $debt;
echo "<br>";


//Float - Decimal point number
$income = 200.50;
$debt = -45.65;
echo $income;
echo "<br>";
echo $debt;
echo "<br>";



//Boolean - can be either true or false
$x = true;
$y = false;
echo var_dump($x);
echo "<br>";
echo var_dump($y);
echo "<br>";

//Object - Instances of classes
//Employee is a class ---> Harry cna be one object

//Array -Used to store multiple values in a single variable
$friends = array("Binay", "Lishal", "Adit", "Samman");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[2];
echo "<br>";

//Null
$name = Null;
echo $name;
echo var_dump($name);

?>