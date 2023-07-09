<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'crudmodal';

$conn = mysqli_connect($hostname,$username,$password,$database);

if($conn==false){
    die(mysqli_error($conn));
}



?>