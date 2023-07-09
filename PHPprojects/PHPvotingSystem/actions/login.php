<?php
include('connection.php');
session_start();

if($_SERVER['REQUEST_METHOD']=='POST'){

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $std = $_POST['std'];

    $sql= "SELECT * FROM `userdata` WHERE name='$name' and mobile='$mobile' and password='$password' and standard='$std'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        $select  = "SELECT name, photo, votes, id FROM `userdata` WHERE standard='group'";
        $selectgroup = mysqli_query($conn, $select);
        if(mysqli_num_rows($selectgroup)>0){
            $groups = mysqli_fetch_all($selectgroup,MYSQLI_ASSOC);
            $_SESSION['groups'] = $groups;
        }
        $data = mysqli_fetch_array($result);
        $_SESSION['id'] = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['data'] = $data;

        echo '<script>        
        window.location="../partials/dashboard.php";
        </script>';

    }else{
        echo '<script>
        alert("Invalid credentials");
        window.location="../index.php";
        </script>';
    }
    

}