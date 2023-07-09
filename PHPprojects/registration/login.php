<?php
$login = 0;
$invalid = 0;

if($_SERVER['REQUEST_METHOD']=="POST"){
    include('connection.php');
    
    $user_email = $_POST['user_email'];
    $password = $_POST['password'];

    $select = "SELECT * FROM `registration` WHERE user_email='$user_email' and password='$password'";
    $result = mysqli_query($conn, $select);    
    if($result){
        $rows = mysqli_num_rows($result);
        if($rows>0){
            // echo "User is already Exists";
            $login = 1;
            session_start();
            $_SESSION['user_email']=$user_email;
            header('location:home.php');
        }else{
            // $invalid = 1;
            header('location:sign.php');
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
        if($invalid){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Ohh no Sorry! </strong>Data is invalid.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
    ?>
    <?php
        if($login){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>You are successfully Logged In</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
    ?>
    
    <div class="container mt-3">
        <h2 class="text-center">User Logged in Page</h2>

    <form action="login.php" method="post">
        
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control" name="user_email" placeholder="Enter Email">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">User Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter password">
        </div>
        <div class="mb-3">           
            <input type="submit" class="btn btn-success w-100" name="submit" value="Log In">
        </div>



    </form>



    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>