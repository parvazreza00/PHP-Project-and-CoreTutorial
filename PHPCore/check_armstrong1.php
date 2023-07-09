<?php
if(isset($_POST['submit'])){

$num = $_POST['number'];
$sum = 0;
$x = $num;

while($x>0){
    $rem = $x%10;
    $sum = $sum+$rem*$rem*$rem;
    $x = $x/10;
}
if($sum==$num){
    echo "$num is an Armstrong Number";
}else{
    echo "$num is Not an Armstrong number";
}

}

?>

<form action="" method="post">
    <input type="text" name="number">
    <input type="submit" name="submit" value="Submit">
</form>
