<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include('connection.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    $select = "SELECT * FROM `crud` WHERE email='$email'";
    $result = mysqli_query($conn, $select);
    if($result){
        $rows = mysqli_num_rows($result);
        if($rows>0){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>OPS!!! </strong>User is already Exists.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }else{
            if($password===$confirmPassword){
                $insert = "INSERT INTO `crud`(`name`, `email`, `phone`, `password`) VALUES ('$name','$email','$phone','$password')";
                $sql = mysqli_query($conn, $insert);
                if($sql){
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>You are successfully Signed In</strong>Now Logged In
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                header('location:crudshow.php');
                }
            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Ohh no Sorry! </strong>Your Credentials is invalid.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
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
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-3">

        <h1 class="text-center">PHP CRUD Operation</h1>

        <form method="post">
            <div class="mb-3">
                <label for="" class="form-label">User Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Username" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Phone </label>
                <input type="text" class="form-control" name="phone" placeholder="Enter Phone" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="confirmPassword" placeholder="confirm password">
            </div>
            <div class="mb-3 text-center">               
                <input type="submit" class="btn btn-success w-100" value="Submit">
                
            </div>

        </form>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>