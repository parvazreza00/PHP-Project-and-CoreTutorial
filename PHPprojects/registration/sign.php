<?php
$success = 0;
$user = 0;
$passNotmatch = 0;

if($_SERVER['REQUEST_METHOD']=="POST"){
    include('connection.php');

    $username = $_POST['username'];
    $user_email = $_POST['user_email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    $select = "SELECT * FROM `registration` WHERE user_email='$user_email'";
    $result = mysqli_query($conn, $select);    
    if($result){
        $rows = mysqli_num_rows($result);
        if($rows>0){
            // echo "User is already Exists";
            $user = 1;
        }else{
            if($password===$confirmPassword){
                $insert = "INSERT INTO `registration`(`user_name`, `user_email`, `password`) VALUES ('$username','$user_email','$password')";
                $sql = mysqli_query($conn, $insert);
                if($sql==false){
                    die(mysqli_error($conn));        
                }else{
                    // echo "Sign Up Successfully";
                    // header('location:login.php');

                    $success = 1;
                    
                }
            }else{
                $passNotmatch = 1;
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
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

  <?php
        if($passNotmatch){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Ohh no Sorry! </strong>User Password is missmathced.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
    ?>
    <?php
        if($user){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Ohh no Sorry! </strong>User is already Exists.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
    ?>
    <?php
        if($success){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            You are successfully Signed In<strong><a href="login.php" class="text-decoration-none"> Now Logged In</a></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
    ?>
    
    <div class="container mt-3">
        <h2 class="text-center">User Sign Up Page</h2>

    <form action="sign.php" method="post">
        <div class="mb-3">
            <label for="" class="form-label">User Name</label>
            <input type="text" class="form-control" name="username" placeholder="Enter Username">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control" name="user_email" placeholder="Enter Email">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter password">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="confirmPassword" placeholder="Enter confirm password">
        </div>
        <div class="mb-3 text-center">  
                     
            <input type="submit" class="btn btn-success" name="submit" value="Sign Up">
            <a href="login.php" class="btn btn-primary">Logged In</a>
        </div>



    </form>



    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>