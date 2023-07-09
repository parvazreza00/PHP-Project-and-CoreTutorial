<?php

$cars = array('BMW','Hondai','Dastun');

foreach($cars as $car){
    echo $car.', ';
}

sort($cars);

echo '<ul>';
foreach($cars as $car){
    echo "<li>$car</li>";
}
echo "</ul>";



?>