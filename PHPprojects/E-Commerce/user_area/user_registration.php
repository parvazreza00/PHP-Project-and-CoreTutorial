<?php
include('../includes/connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <!-- bootstrap css cdn link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <!-- font-awesome cdn link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- custom css link -->
      <link rel="stylesheet" href="../style.css">
      <title>User Registration</title>
</head>
<body class="bg-light">
    
    <div class="container-fluid mt-3">
        <h2 class="text-center">User Registration Form</h2>
        <div class="row d-flex align-items-center justify-content-center">
        <div class="col-md-12 col-lg-12 col-xl-6">
        <!-- form -->
        <form action="" method="POST" enctype="multipart/form-data">
            <!-- user Name -->
            <div class="form-outline mb-4 ">
                <label for="user_username" class="form-label">User Name</label>
                <input type="text" name="user_username" id="user_username" class="form-control" placeholder="Enter user name" autocomplete="off" required="">
            </div>
            <!-- user email -->
            <div class="form-outline mb-4 ">
                <label for="user_email" class="form-label">User mail</label>
                <input type="email" name="user_email" id="user_email" class="form-control" placeholder="Enter user_email" autocomplete="off" required>
            </div>
             <!-- user_image -->
             <div class="form-outline mb-4 ">
                <label for="user_image" class="form-label">User Image</label>
                <input type="file" name="user_image" id="user_image" class="form-control"  required>
            </div>
             <!-- password -->
             <div class="form-outline mb-4 ">
                <label for="password" class="form-label">User password</label>
                <input type="password" name="password" id="password" class="form-control"  required>
            </div>
            <div class="form-outline mb-4">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password" class="form-control"  required>
            </div>
            <!-- user address -->
            <div class="form-outline mb-4 ">
                <label for="user_address" class="form-label">User address</label>
                <input type="text" name="user_address" id="user_address" class="form-control" placeholder="Enter user Address" autocomplete="off" required="">
            </div>
            <!-- user Mobile number -->
            <div class="form-outline mb-4 ">
                <label for="user_mobile" class="form-label">Mobile Number</label>
                <input type="text" name="user_mobile" id="user_mobile" class="form-control" placeholder="Enter user mobile" autocomplete="off" required="">
            </div>
            <div class="form-outline mb-4">            
             <input type="submit" name="user_register" class="btn btn-info border-0 py-2 px-3" value="Register">
             <p>Already Have an Account? <a href="user_login.php" class="text-decoration-none fw-bold">Login</a></p>
            </div>
            
        </form>
        </div>
        </div>

    </div>
    

    <!-- bootstrap js cdn link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>