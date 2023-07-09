<?php 
function Fibonacci($n){
    $num1 = 0;
    $num2 = 1;
    $counter = 0;

    while($counter<$n){
        echo $num1.' ';
        $num3 = $num1+$num2;
        $num1 = $num2;
        $num2 = $num3;

        $counter++;

    }

}

$n = 10;
echo Fibonacci($n);



?>