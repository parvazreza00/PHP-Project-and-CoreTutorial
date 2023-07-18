<?php
//unique random number generate
$n=range(21,40);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
echo $n[$x].'<br> ';
}
echo "<br>";

//only random number generate
echo rand(10341,20001);
echo "<br>";
echo rand();
?>

