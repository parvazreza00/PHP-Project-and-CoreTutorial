<?php
function multiplies($x, $y){
    $a = explode(' ',trim($x));
    $b = explode(' ',trim($y));
    foreach($a as $key => $value){
        $output[$key] = $a[$key]*$b[$key];
    }
    return implode(' ',$output);

}

echo multiplies(("3 4 5"),("4 3 2"));


?>