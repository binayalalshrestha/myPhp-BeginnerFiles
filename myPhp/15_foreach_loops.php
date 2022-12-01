<?php

echo "foreach loops in PHP <br>";

$arr = array("Bananas","Apples","Harpic","Bread");
/*
for ($i=0; $i < count($arr); $i++) { 
    echo $arr[$i];
    echo "<br>";
}
*/

//better way to do the upper loop using foreach loop

foreach ($arr as $value) {
    echo "$value <br>";
}

?>