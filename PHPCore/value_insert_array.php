<?php
//push any value only at the end of the array;
$arr = array('apple','komola');
array_push($arr,'pineapple','water-melon');
print_r($arr); 

echo "<br>";
//push any value any position of the array
$arr2 = array(1,2,3,4,5,8,9,10,77,90,);
$insert = '60 70';
$position = 9;
array_splice($arr2,$position,0,$insert);
// print_r($arr2);
foreach($arr2 as $a){
    echo $a.' ';
}
$arr3 = array('banana','atha');
echo "<br>";
//two or more array merging 
$attach = array_merge($arr, $arr2,$arr3);
foreach($attach as $att){
    echo $att.' ';
}

echo "<br>";
//inserting one or more element at the beginning into an array
$arr4 = array(4,9,8,2);
$arr5 = array(1,2,3);
array_unshift($arr4, $arr5);
print_r($arr4);
// foreach($arr4 as $b){
//     echo $b.' ';
// }
echo '<br>';
$arr6 = array(2=>'Lebu',3=>'mango');
$arr7 = array(1=>'apple');
$merge = array(1=>'Tomato') + $arr6;
print_r($merge);
echo "<br>";
$arr8 = array(1=>'lichu');
$arrMerge = array_merge($arr8,$arr6);
print_r($arrMerge);


?>