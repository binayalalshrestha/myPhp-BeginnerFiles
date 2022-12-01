<!-- 
10. Looking for a final output
Array (
“0” => Array (“label” => Appointment, “is_open” => 1, “open_time” =>
10:00, “close_time” => 16:00)
“1” => Array (“label” => Checkup, “is_open” => 0, “open_time” => 12:00,
“close_time” => 20:00)
)
From inputs below:
● $x =
array(0=>['label'=>Appointment,'is_open'=>1],1=>['label'=>Checkup,'
is_open'=>0]);
● $y = array(0=>['open_time'=>'10:00'],1=>['open_time'=>'12:00']);
● $z = array(0=>['close_time'=>'16:00'],1=>['close_time'=>'20:00']); 
-->

<!-- $x=array("label"=>array("Appointment","Checkup"),"is_open"=>array(1,0),"open_time"=>array("10:00","12:00"),"close_time"=>array("16:00","20:00"));
$y=array("open_time",array($x));
// echo array_search("open_time",array($x));
print_r ($y);
echo"<br><br>";

print_r ($x["label"]);
unset($x["close_time"],$x["open_time"]);

print_r ($x);
echo"<br>"; -->

<?php
  $x = array(0=>['label'=>"Appointment",'is_open'=>1],1=>['label'=>"Checkup",'is_open'=>0]);
  $y = array(0=>['open_time'=>'10:00'],1=>['open_time'=>'12:00']);
  $z = array(0=>['close_time'=>'16:00'],1=>['close_time'=>'20:00']);

  $result = array();
  for($i=0;$i<2;$i++){
    array_push($result,array_merge($x[$i], $y[$i], $z[$i]));
  }

	print_r($result);
 
?>


