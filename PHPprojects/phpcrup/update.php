<?php
    include('connection.php');
    $id = $_GET['updateid'];

    $select = "SELECT * FROM `crud` WHERE id='$id'";
    $sql = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($sql);
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $password = $row['password'];

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];    

    $update = "UPDATE `crud` SET `name`='$name',`email`='$email',`phone`='$phone',`password`='$password' where id='$id'";
    $result = mysqli_query($conn, $update);
    if($result){
        // echo "Data Updated successfully";
        header('location:crudshow.php');
    }else{
        echo "Data not updated";
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
                <input type="text" class="form-control" name="name" placeholder="Enter Username" value="<?php echo $name; ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email" value="<?php echo $email; ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Phone </label>
                <input type="text" class="form-control" name="phone" placeholder="Enter Phone" value="<?php echo $phone; ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password" value="<?php echo $password; ?>">
            </div>
            
            <div class="mb-3 text-center">               
                <input type="submit" class="btn btn-success w-100" name="submit" value="Update">
                
            </div>

        </form>
    </div>