<?php
function myfun(){
    echo "Hello! I am a user defined function";
}
myfun();
echo "<br>";
function myfun2($name){
    echo "Hello Md. $name";
}
myfun2("Parvaz");
echo "<br>";
function myfun3(&$str){
    echo "Hello Md. $str";
}
$name = "Parvaz";
myfun3($name);
echo "<br>";
function myfun4($name="Yeasin"){
    echo "Hello! Md. $name";
}
myfun4("Parvaz<br>");
myfun4();
echo "<br>";
myfun4("Reza");
echo "<br>";
function cube($n){
    return $n*$n*$n;
}
echo "Cube of 3 is :".cube(3);
echo "<br>";
echo "<br>";

function add($x,$y){
    $sum = $x+$y;
    echo "Sum = $sum<br><br>";
}
function sub($x,$y){
    $sub = $x-$y;
    echo "Subtract = $sub<br><br>";

}

if(isset($_POST['add'])){
    add($_POST['first'],$_POST['second']);
}
if(isset($_POST['sub'])){
    sub($_POST['first'],$_POST['second']);
}
?>


<form action="" method="post">
    <input type="text" name="first"><br><br>
    <input type="text" name="second"><br><br>
    <input type="submit" name="add" value="Addition">
    <input type="submit" name="sub" value="Subtract">
</form>

<?php
function display($number){
    if($number<=5){
        echo "$number<br>";
        display($number+1);
    }
    
}
display(1);

echo "<br>";
function factorial($n){
    if($n<0)
        return -1;
    if($n==0)
        return 1;

    return ($n*factorial($n-1));
}
echo factorial((5));
echo "<br>";
$salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");  
echo $salary["Sonoo"];
echo $salary["Vimal"];
echo "<br>";
foreach($salary as $key => $sal){
    echo $key." = ".$sal."<br>";
}

echo "<br>";
$emp = array  
  (  
  array(1,"sonoo",400000),  
  array(2,"john",500000),  
  array(3,"rahul",300000)  
  );  

  for($row=0;$row<3;$row++){
    for($col=0;$col<3;$col++){
        echo $emp[$row][$col]." ";
    }
    echo "<br>";
  }
  echo "<br>";
  $season=array("summer","winter","spring","autumn");  
  $countse = count($season);  
  for($i=0;$i<$countse; $i++){
    echo $season[$i];
    echo "<br>";
  }

  $arr = array(3,4,5,8,1,2,9);
//   sort($arr);
   print_r($arr);
  echo "<br>";
//   $reverse=array_reverse($arr);
//   print_r($reverse);
$str = "JavatPoint";
echo addcslashes($str,'t');
?>