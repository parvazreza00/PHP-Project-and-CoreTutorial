<?php

$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

$temp_array = explode(',', $month_temp);
$total_temp = 0;
$temp_array_length = count($temp_array);

foreach($temp_array as $temp){
    $total_temp += $temp;
}
 $highest_aver_temp = $total_temp/$temp_array_length;
 echo "Average Highest Temperature : ".$highest_aver_temp;
echo "<br>";

 sort($temp_array);
 echo "Sort array : ";
 foreach($temp_array as $arr){
    echo $arr.' ';
 }

 echo "<br>";
 echo "Five Lowest Temperature : ";
 for($i = 0; $i < 5; $i++){
    echo $temp_array[$i].' ';
 }
 echo "<br>";
 echo "Five Highest Temperature: ";
 for($i = ($temp_array_length-5); $i < $temp_array_length; $i++){
    echo $temp_array[$i]." ";
 }






?>