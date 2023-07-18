<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'php1_ecommerce';

$conn = mysqli_connect($hostname,$username,$password,$database);

if($conn==false){
    die(mysqli_error($conn));
}



?>