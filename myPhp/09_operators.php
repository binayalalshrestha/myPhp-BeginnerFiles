<?php
//Operators in PHP
/*
1. Arithemetic Operators
2. Assignment Operators
3. Comparison Operators
3. Logical Operators
*/

$a = 45;
$b = 5;

//1. Arithemetic Operators
echo "For a + b, the result is " . ($a + $b) . "<br>";
echo "For a - b, the result is " . ($a - $b) . "<br>";
echo "For a * b, the result is " . ($a * $b) . "<br>";
echo "For a / b, the result is " . ($a / $b) . "<br>";
echo "For a % b, the result is " . ($a % $b) . "<br>";
echo "For a ** b, the result is " . ($a ** $b) . "<br>";
echo "<br>";

//2. Assignment Operators
$x = $a;
echo "For x, the value is " . $x . "<br>";
$x += 5;
echo $x;
echo "<br>";
$x -= 5;
echo $x;
echo "<br>";
$x *= 5;
echo $x;
echo "<br>";
$x /= 5;
echo $x;
echo "<br>";
$x %= 5;
echo $x;
echo "<br>";
$x **= 5;
echo $x;
echo "<br>";

//Comparison Operators
$y = 7;
$z = 9;
echo "For y == z, the result is ";
echo var_dump($y == $z);
echo "<br>";

echo "For y <= z, the result is ";
echo var_dump($y <= $z);
echo "<br>";

echo "For y <> z, the result is "; //<> means not equal to
echo var_dump($y <> $z);
echo "<br>";

//Logical Operators
$m = true;
$n = false;

echo "For m and n, the result is ";
echo var_dump($m and $n);
echo "<br>";

echo "For m && n, the result is ";
echo var_dump($m && $n);//you can write && for and
echo "<br>";

echo "For m or n, the result is ";
echo var_dump($m or $n);
echo "<br>";

echo "For m || n, the result is ";
echo var_dump($m || $n);//you can write || for or
echo "<br>";

echo "For !m, the result is ";
echo var_dump(!$m);
echo "<br>";
echo "<br>";






?>