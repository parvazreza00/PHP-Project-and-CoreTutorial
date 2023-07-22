<?php

include('includes/connection.php');
include('functions/common_functions.php');

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>E-COMMERCE</title>
      <!-- bootstrap css cdn link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <!-- font-awesome cdn link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- custom css link -->
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div class="container-fluid p-0">
         <!-- first child -->
         <nav class="navbar navbar-expand-lg bg-info">
            <div class="container-fluid">
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <a class="navbar-brand" href="/"><img src="./images/logo.png" alt="" class="logo"></a>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Contacts</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i><sup><?php cart_item_count(); ?></sup></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Total Price: <?php totalCartPrice(); ?>/-</a>
                     </li>
                  </ul>
                  <form class="d-flex" role="search" action="" method="GET">
                     <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                     <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
                  </form>
               </div>
            </div>
         </nav>
          <!-- calling add to cart -->
          <?php
         cart();
         ?>
         <!-- second child -->
         <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
               <li class="nav-item">
                  <a class="nav-link" href="#">Welcome Guest</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Login</a>
               </li>
            </ul>
         </nav>
         <!-- third child -->
         <div class="bg-light">
            <h3 class="text-center">Hidden Store</h3>
            <p class="text-center">Communication is at the heart of e-commerce and community</p>
         </div>
         <!-- fourth child -->
         <div class="container-fluid">
            <div class="row">
            <div class="col-md-10">
                  <!-- products col -->
                  <div class="row">
         <!-- fetching product data on the user page -->
         <?php
         // calling function;
         searchProduct();
         get_unique_categories();
         get_unique_brands();

         ?>
               

                     
                     
                  </div>
               </div>
               <div class="col-md-2 bg-secondary p-0">
                  <!-- sidenav col -->
                  <!-- brands to be displayed -->
                  <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info">
                        <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
                    </li>
                    <!-- fetching brands -->
                    <?php
                   getBrands();
                    ?>
                    
                  </ul>
                   <!-- categories to be displayed -->
                   <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info">
                        <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
                    </li>
                    <!-- displaying categories  -->
                    <?php
                    getCategory();
                    ?>
                    
                    
                  </ul>
               </div>
            </div>
         </div>
         <!-- last child -->
            <div class="bg-info text-center p-3">
                <p>All Right Reserved &copy;- Designed by YAPR-Studio </p>
            </div>
      </div>
      <!-- bootstrap js cdn link -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   </body>
</html>