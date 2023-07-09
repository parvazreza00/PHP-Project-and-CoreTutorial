<?php
$user = 0;
$success = 0;
$invalid = 0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include('connection.php');
    $success;
    
    if(isset($_POST['signup'])){
        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);

        $select = "SELECT * FROM `singup` WHERE email='$email'";
        $result = mysqli_query($conn, $select);
        if($result){
            $row = mysqli_num_rows($result);
            if($row>0){
                // echo "Use is already Exists";
                // header('location:index.php');
                $user = 1;
            }else{
                if($password===$cpassword){
                    $insert = "INSERT INTO `singup`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
                    $sql = mysqli_query($conn, $insert);
                    if($sql){
                        // echo "Success";
                        // header('location:index.php');
                        $success = 1;
                        
                    }else{
                        echo "not inserted";
                    }
                }else{
                    // echo "Credential is invalid";
                    $invalid = 1;
                }
            }
        }else{
            die(mysqli_error($conn));
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
            <strong>Ohh no Sorry! </strong>User is already Exists. <a href="index.php">Go to login</a>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}

    ?>
    <?php
if($success){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>User signed successfully. </strong> <a href="index.php">Go to login</a>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}
    ?>

    <?php
if($invalid){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Ohh no Sorry! </strong>User password doesn\'t match! <a href="index.php">Go to Sign in</a>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}

    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>