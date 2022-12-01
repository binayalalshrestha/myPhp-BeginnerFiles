<?php

$open = fopen('Q4.csv','w');
$arr = array(array("Name", "Phone", "Email", "Address"),array("Binaya", "9860479780", "binaya.shrestha08@gmail.com", "Ravi Bhawan"));
foreach ($arr as $arr){


fputcsv($open,$arr);

}

    fclose($open);

?>