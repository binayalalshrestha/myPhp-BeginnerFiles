<?php

echo "PHP on functions<br>";

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}

function avgMarks($marksArr){
    $sum = 0;
    $i = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}

$BinayShrestha = [92, 72, 93, 88, 91, 82];
//$sumMarksB = processMarks($BinayShrestha);
$sumMarksB = avgMarks($BinayShrestha);

$LishalBhari = [83, 65, 95, 78, 89, 91];
//$sumMarksL = processMarks($LishalBhari);
$sumMarksL = avgMarks($LishalBhari);

echo "Total marks scored by Binay out of 600 is $sumMarksB <br>";
echo "Total marks scored by Lishal out of 600 is $sumMarksL <br>";



?>


