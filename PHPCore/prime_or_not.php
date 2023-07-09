

<form action="" method="post">
    <input type="text" name="prime"><br><br>
    <input type="submit" name="submit" value="check Prime">
</form>

<?php
if(isset($_POST['submit'])){
    $num = $_POST['prime'];
    $count = 0;
    for($i=1;$i<=$num;$i++){
        if($num%$i==0){
            $count++;
        }
    }
    if($count<3){
        echo "$num is a prime number.";
    }else{
        echo "$num is not a prime number.";
    }
}


?>