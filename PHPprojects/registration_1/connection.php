<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'registration_1';

$conn = mysqli_connect($hostname,$username,$password,$database);

if($conn==false){
    die(mysqli_error($conn));
}



?>