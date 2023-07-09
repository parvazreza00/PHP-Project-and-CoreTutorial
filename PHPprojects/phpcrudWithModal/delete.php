<?php
include('connection.php');

if(isset($_POST['deleteidSend'])){
    $id = $_POST['deleteidSend'];

    $deleteid = "DELETE FROM `crud` WHERE id='$id'";
    $result = mysqli_query($conn, $deleteid);
}

?>