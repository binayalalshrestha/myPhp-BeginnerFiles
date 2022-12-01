<?php
 $a=array(3,1,5,13,18,2,4);

 sort($a);
 echo "Sorting in Ascending Order";
 echo "<pre>";
 print_r($a);
 echo "</pre>";

 rsort($a);
 echo "Sorting in Descending Order";
 echo "<pre>";
 print_r($a);
 echo "</pre>";

?>