<?php

$arr = array("Trapper Wolf", "Cara Dune", "Bo-Katan Kryza", "Paul Sun-Hyung Lee", "Dee Bradley Baker");

foreach ($arr as $arr){
    $arr = explode(",", $arr);

    //print_r($arr);

    echo ("<br>");

        foreach ($arr as $arr1){
            $arr1 = explode(" ", $arr1);
            
            if (count($arr1)<=2){
                echo ("First name : " . $arr1[0]);
                echo ("<br>");
                echo ("Last name : " . $arr1[1]); 
                
            }
            else {
                echo ("First name : " . $arr1[0]);
                echo ("<br>");
                echo ("Middle name : " . $arr1[1]);
                echo ("<br>");
                echo ("Last name : " . $arr1[2]);
                
            }
            // print_r($arr1[0]);
             echo ("<br>");
    }
}




?>