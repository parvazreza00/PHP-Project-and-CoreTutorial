<?php
//  get prime number;

// $count = 0;
// $num = 2;

// while($count<15){
//     $div_count = 0;
//     for($i=1; $i<=$num; $i++){
//         if($num%$i==0){
//             $div_count++;
//         }
//     }
//     if($div_count<3){
//         echo $num." ,";
//         $count = $count+1;
//     }
//     $num = $num+1;
// }


$flag = 0;
echo "Enter a positive number\n";
$num = readline();
$m = $num/2;
for($i = 2; $i<=$m; $i++){
    if($num % $i == 0){
        echo "$num is not Prime Number.";
        $flag = 1;
        break;
    }
}
if($flag==0){
    echo "$num is prime number";
}




?>