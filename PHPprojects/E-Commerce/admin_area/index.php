<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin</title>
      <!-- bootstrap css cdn link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <!-- font-awesome cdn link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />     
      <!-- custom css link -->
      <link rel="stylesheet" href="../style.css">
      <style>
        .admin_image{
            width:100px;
            object-fit: contain;
        }
        .footer{
            position:absolute;
            bottom:0;
            width:100%;
        }
      </style>
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.png" alt="Logo" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <!-- third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-5">
                    <a href="#"><img src="../images/pineapplejuice.jpg" alt="" class="admin_image"></a>
                    <p class="text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button type="submit" class="btn btn-primary py-1 px-2"><a href="" class="nav-link">Insert Products</a></button>
                    <button type="submit" class="btn btn-primary my-1 mx-1"><a href="" class="nav-link">View Products</a></button>
                    <button type="submit" class="btn btn-primary my-1 mx-1"><a href="" class="nav-link ">Insert Brands</a></button>
                    <button type="submit" class="btn btn-primary my-1 mx-1"><a href="" class="nav-link ">View Brands</a></button>
                    <button class="btn btn-primary my-1 mx-1"><a href="index.php?insert_category" class="nav-link ">Insert Category</a></button>
                    <button type="submit" class="btn btn-primary my-1 mx-1"><a href="" class="nav-link ">View Category</a></button>
                    <button type="submit" class="btn btn-primary my-1 mx-1"><a href="" class="nav-link ">All Orders</a></button>
                    <button type="submit" class="btn btn-primary my-1 mx-1"><a href="" class="nav-link ">All Payments</a></button>
                    <button type="submit" class="btn btn-primary my-1 mx-1"><a href="" class="nav-link ">List Users</a></button>
                    <button type="submit" class="btn btn-primary my-1 mx-1"><a href="" class="nav-link ">Logout</a></button>
                </div>
            </div>
        </div>
    </div>

    <!-- fourth child -->
    <div class="container">
        <?php 
        if(isset($_GET['insert_category']))
        {
            include('insert_category.php');
        }
        ?>
    </div>





    <div class="bg-info text-center p-3 footer">
        <p>All Right Reserved &copy;- Designed by YAPR-Studio </p>
    </div>


<!-- bootstrap js cdn link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>