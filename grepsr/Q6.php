<?php

$arr=array("Maeve Milay","Bernard Lowe","Dolores Abernathy","Charlotte Hale");

foreach ($arr as $arr){
    $arr = explode("a", $arr);
    echo ("<br>");
    foreach ($arr as $ar){
        print_r($ar);
        
    }
}
?>