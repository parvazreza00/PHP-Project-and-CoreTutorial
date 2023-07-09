<?php
function Ternary_test($n){
    $r = $n > 30 ? "Greater than 30" : ($n > 20 ? "Greater Than 20" : ($n > 10 ? "Greater than 10" : "Input a number at least greater than 10!"));
    echo $n. " : ".$r."<br>";

}

Ternary_test(32);
Ternary_test(22);
Ternary_test(12);
Ternary_test(7);




?>