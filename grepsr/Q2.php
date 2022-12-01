<?php
echo "From numbers 1 to 500,  the numbers divisible by 5 are as follows:<br>";
for ($i = 1; $i <=500; $i++){
    if ($i%5==0){
        
        echo $i;
        echo "<br>";
    }
}

?>