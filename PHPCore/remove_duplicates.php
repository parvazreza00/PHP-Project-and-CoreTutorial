<?php

function remove_duplicate_values($lists){
    $nums_unique = array_values(array_unique($lists));
    return $nums_unique; 
}



$nums = array(1,2,2,4,3,5,3,6,7);
print_r(remove_duplicate_values($nums));


?>