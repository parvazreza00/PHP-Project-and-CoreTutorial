<?php
include('connection.php');

if($_SERVER['REQUEST_METHOD']=='POST'){

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $std = $_POST['std'];
    
    if($password!=$cpassword){
        echo '<script>
        alert("Password do not match");
        window.location ="../partials/registration.php";
        </script>';
    }
    else{
        move_uploaded_file($tmp_name,"../uploads/$image");
        $insert = "INSERT INTO `userdata` (name,mobile,password,photo,standard,status,votes) VALUES('$name','$mobile','$password','$image','$std','0','0')";
        $result = mysqli_query($conn, $insert);
    
        if($result){
            echo '<script>
            alert("Registration success full");
            window.location ="../index.php";
            </script>';
        }else{
            die(mysqli_error($conn));
        }
    
    }
    

}



?>