<?php 
$user = 0;
$success = 0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include('connection.php');
    if(isset($_POST['login'])){
        $email  = $_POST['email'];
        $password = md5($_POST['password']);//all password 123

        $select = "SELECT * FROM `singup` WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $select);
        if($result){
            $row = mysqli_num_rows($result);
            if($row>0){
                // echo "login success full";
                // $success = 1;
                session_start();
                $_SESSION['email']=$email;
                header('location:welcome.php');

            }else{
                // echo "Credentials doesn't match";
                $user = 1;
                // header('location:index.php');
            }
            
        }
    }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <?php
if($user){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Ohh no! </strong> User Credentials doesn\'t match!. <a href="index.php">Go to Login</a>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}

    ?>
    <?php
if($success){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>User Login successfully. </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}
    ?>

   




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>