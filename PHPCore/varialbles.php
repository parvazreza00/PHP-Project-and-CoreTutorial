<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 style="text-align:center">PHP Variables</h2>
    <hr>
    <?php
    $str = "PHP is the best for Backend part";
    $fltData = 64.91;
    $DataIn = 400;

    echo "This is string data type: $str <br>";
    echo "This is Float data type: $fltData <br>";
    echo "This is integer data type: $DataIn <br>";

    function myfun(){
        // $num = $GLOBALS['fltData'] + $GLOBALS['DataIn'];
        global $fltData;
        global $DataIn;
        $num = $fltData + $DataIn;

        echo "Num is local variable : $num";
        
    }
    myfun();
    echo "<br>";
    $x = "abc";
    $$x = 200;

    echo $x."<br>";
    echo $$x."<br>";
    echo $abc;
    const MESSAGE = "Hello Java T Point";
    echo MESSAGE;

    echo __LINE__."<br><br>";
    echo __FILE__."<br><br>";
    echo __DIR__."<br><br>";
    function MYPHP(){
        echo __FUNCTION__."<br><br>";
    }
    MYPHP();

    $name = "JavaTpoint";
    echo "The company name is : $name<br>";
    echo 'The company name is : '.$name."<br>";

    $arr = array("Bus", "Truck","Car");
    var_dump($arr);
    echo "<br>";
    echo $arr[0];

    class Myfun{

        function myBike(){
            $name = "Suzuki";
            echo "This $name is my Dream Bike";
        }

    }

    $obj = new Myfun();
    $obj->myBike();
    


    ?>
    <?php
// $i = 1;
// for(;;){
//     echo $i++;
//     echo "<br>";
// }

    ?>
    <br>

    <?php
    for($i=1;;$i++){
        if($i>9){
            break;
        }
        echo $i;
       
    }
    echo "<br>";
    ?>
    <?php

$i = 1;
for(;;){
    if($i>9){
        break;
    }
    echo $i;
    $i++;
}
echo "<br>";

    ?>

    <?php
for($i=1,$j=0;$i<=9;$j += $i,print $i, $i++);
    ?>

<?php
echo "<br>";
for($i = 1; $i<=3; $i++){
    for($j=1;$j<=3;$j++){
        echo "$i $j";
        echo "<br>";
    }
}
    ?>

<?php
$employee = array (  
    "Name" => "Alex",  
    "Email" => "alex_jtp@gmail.com",  
    "Age" => 21,  
    "Gender" => "Male"  
);  

foreach($employee as $key => $element){
    echo $key.':'.$element;
    echo "<br>";
}
    ?>

    <?php
for($i=1;$i<=3;$i++){
    for($j=1;$j<=3;$j++){
        if(!($i==$j)){
            continue;
        }
        echo $i.$j;
        echo "<br>";
    }
}

    ?>

    <?php
    $i = 1;
    while($i<=20){
        if($i%2==1){
            $i++;
            continue;
        }
        echo $i;
        echo "<br>";
        $i++;
    }
    ?>
     
</body>
</html>