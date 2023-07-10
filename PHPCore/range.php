<?php
//increment with 4 between 50 to 150
$low = 50;
$high = 150;
$devidient = 4;

$divisable_number = implode(',',range($low,$high, $devidient));
echo $divisable_number;

//max length and min length from a array string value;
echo "<br>";
$old_array = array("bmw","jeep","dastun","ferrari","Honda");
$new_array = array_map('strlen',$old_array);
 echo "Minimul length : ".min($new_array);
 echo "<br>";
 echo "Max length : ".max($new_array);


?>