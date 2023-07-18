<?php

// $Cars = array("Ferrari", "Nissan", "BMW", "HONDA");
// print_r($Cars);
// echo "<br>";
// sort($Cars);
// print_r($Cars);
// echo "<br>";
// rsort($Cars);
// print_r($Cars);
// echo "<br>";
$array1 = array(1,2,3,4);
$array2 = array(4,5,6,7);
print_r(array_merge($array1,$array2));
echo "<br>";
$array3 = $array1 + $array2;
print_r($array3);
?>