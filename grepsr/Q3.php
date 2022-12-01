<?php

echo "The common elements from the two given array :<br>";
$a=array('a','c','d','g','i');
$b=array('x','z','n','k','d','l','a','m','n');


$common = array_intersect($a,$b); //finding intersect of two array
$common = array_values($common); //re-ordering the keys
print_r($common);


?>