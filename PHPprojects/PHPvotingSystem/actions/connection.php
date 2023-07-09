<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'votingsystem';

$conn = mysqli_connect($hostname,$username,$password,$database);

if(!$conn){
    die(mysqli_error($conn));
}



?>