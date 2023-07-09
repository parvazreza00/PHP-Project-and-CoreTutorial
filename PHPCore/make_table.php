<?php
for($i=1;$i<6;$i++){
    for($j=1;$j<6;$j++){
        if($j==1){
            echo str_pad($i*$j, 3, " ", STR_PAD_LEFT);
        }else{
            echo str_pad($i*$j, 3, " ", STR_PAD_LEFT);
        }
    }
    echo "\n";
}

?>

