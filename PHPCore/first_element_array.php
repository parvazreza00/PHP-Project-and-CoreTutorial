<?php 

$cars = array('BMW','Dastun','Hundai');
echo reset($cars);//first element print
echo current($cars);//first element print
echo next($cars);//first next element print
echo next($cars);//then next to next element print

echo "<br>";
foreach($cars as $car){
    echo $car;
}
$cars = array(4=>'BMW', 'b'=>'Dastun','c'=>'Hundai');
echo $cars[4];
echo "<br>";
echo array_values($cars)[2];




?>