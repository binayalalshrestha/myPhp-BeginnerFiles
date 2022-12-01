<?php

echo "Multi-Dimentional Arrays in PHP <br>";


//creating a 2 dimensional array
echo "<br>";
$multiDim = array ( array(2,5,7,8),
                    array(1,2,3,1),
                    array(4,5,0,1) );

//echo var_dump($multiDim);

echo $multiDim[0][0];
echo "<br>";
echo $multiDim[1][0];
echo "<br>";
echo $multiDim[2][3];
echo "<br>";
echo $multiDim[0][3];
echo "<br>";

//printing the contents of a 2 dimensional array
echo "<br>";
for ($i = 0; $i <count( $multiDim ); $i++){
    echo var_dump($multiDim[$i]);
    echo "<br>";
}

//nested for loop
echo "<br>";
for ($i=0; $i <count($multiDim); $i++){
    for ($j=0; $j<count($multiDim[$i]); $j++){
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo "<br>";

}



?>