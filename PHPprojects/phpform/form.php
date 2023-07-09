<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include('connection.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $select = "SELECT * FROM `form` WHERE email='$email' and password='$password'";
    $result = mysqli_query($conn, $select);
    if($result){
        $rows=mysqli_num_rows($result);
        if($rows>0){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Ohh no Sorry!</strong>User is already Exist.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }else{
            $insert = "INSERT INTO `form`(`name`, `email`, `gender`, `phone`, `password`) VALUES ('$name','$email','$gender','$phone','$password')";
            $sql = mysqli_query($conn, $insert);
            if($sql){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>User Data</strong>Inserted successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }else{
                die(mysqli_error($conn));
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
    <title>HTML Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
    

    <div class="container mt-3">

        <h1 class="text-center">HTML Form</h1>

        <form action="form.php" method="post">
        <div class="mb-3">
            <label for="" class="form-label"><b>User Name</b></label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name" >
        </div>
        <div class="mb-3">
            <label for="" class="form-label"><b>Email</b></label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"><b>Gender</b></label>
            <input type="radio"  name="gender" class="ms-5" value="M"> Male
            <input type="radio"  name="gender" class="ms-5" value="F"> Female
            <input type="radio"  name="gender" class="ms-5" value="O"> Others
        </div>
        <div class="mb-3">
            <label for="" class="form-label"><b>Mobile No</b></label>
            <input type="text" class="form-control" name="phone" placeholder="Enter Mobile No.">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"><b>Password</b></label>
            <input type="password" class="form-control" name="password" placeholder="Enter password">
        </div>
        <div class="mb-3 text-center">  
                     
            <input type="submit" class="btn btn-success" name="submit" value="Submit">
            
        </div>
        </form>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>