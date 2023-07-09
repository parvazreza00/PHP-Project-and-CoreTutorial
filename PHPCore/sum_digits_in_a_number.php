<?php
function sum_digits_number($num){
    $sum = 0;
    for($i=0; $i<strlen($num); $i++){
        $sum = $sum+$num[$i];
    }
    return $sum;

}
echo sum_digits_number('570')."<br>";
echo sum_digits_number('57024');


?>