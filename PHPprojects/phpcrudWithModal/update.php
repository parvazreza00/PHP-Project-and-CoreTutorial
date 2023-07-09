<?php
include('connection.php');

if(isset($_POST['updateid'])){
    $id = $_POST['updateid'];

    $select = "SELECT * FROM `crud` WHERE id='$id'";
    $result = mysqli_query($conn, $select);
    $response = array();
    while($row= mysqli_fetch_assoc($result)){
        $response = $row;
    }
    echo json_encode($response);
}else{
    $response['status'] =200;
    $response['message'] ="Invalid";
}
// update query 
if(isset($_POST['hiddenData'])){
    $id =$_POST['hiddenData'] ;
    $name = $_POST['updatename'];
    $email = $_POST['updateemail'];
    $phone = $_POST['updatephone'];
    $place = $_POST['updateplace'];

    $update = "UPDATE `crud` SET `name`='$name',`email`='$email',`phone`='$phone',`place`='$place' WHERE id='$id'";
    $result = mysqli_query($conn, $update);
    
}
?>