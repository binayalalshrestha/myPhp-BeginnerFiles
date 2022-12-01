<!-- 
8. Write a function that accepts two integers (x and y)
and returns the sum of all the numbers between 1 to y 
and is divisible by x.
 -->

<?php

function ab ($x = 5, $y = 20){
    $sum = 0;
    for ($i=1; $i<=$y; $i++){
        $sum=$sum+$i;
        if ($sum % $x == 0){
            echo "y=".$i."  ";
            echo "sum=".$sum."<br>";
        }
    }

    

}

echo (ab());

?>

<!-- loop 1-
sum = 0   0 + 1 = 1   
loop 2-
sum = 1   1 + 2 = 3
loop 3-
sum = 2   3 + 3 = 6
loop 4
sum = 6    6 + 4 = 10
loop 5
sum = 10  10 + 5 = 15
loop 6
sum = 15 + 6 = 21
loop 7
sum = 21 + 7 =28
loop 8
sum = 28 + 8= 36
loop 9
sum = 36 + 9 =45 -->

