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
      <title>E-COMMERCE-CartDetails</title>
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
                        <a class="nav-link" href="display_all_product.php">Products</a>
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
                     
                  </ul>
                  
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
        <div class="container">
            <div class="row">
                <form action="" method="post">
                <table class="table text-center">
                    

<?php
    
    $ip = getIPAddress();
    $total_price = 0;
    $cart_price_query = "SELECT * FROM `cart_details` WHERE `ip_address`='$ip'";
    $result = mysqli_query($conn, $cart_price_query);
    $result_count = mysqli_num_rows($result);
    if($result_count > 0){

      echo '
      <thead>
         <tr>
               <th>Product Title</th>
               <th>Product Image</th>
               <th>Quantity</th>
               <th>Total Price</th>
               <th>Remove</th>
               <th>Operations</th>
         </tr>                        
      </thead>                    
      <tbody>';
   
    while($row = mysqli_fetch_array($result)){
        $product_id = $row['product_id'];
        $select_products = "SELECT * FROM `products` WHERE `product_id`='$product_id'";
        $result_products = mysqli_query($conn, $select_products);
        while($row_product_price = mysqli_fetch_array($result_products)){
            $product_price = array($row_product_price['product_price']);
            $table_price = $row_product_price['product_price'];
            $product_title = $row_product_price['product_title'];
            $product_image1 = $row_product_price['image_1'];
            $product_values = array_sum($product_price);
            $total_price += $product_values;
    
       
?>
                        <tr>
                            <td><?php echo $product_title; ?></td>
                            <td><img src="./admin_area/product_images/<?php echo $product_image1; ?>" alt="" style="width:80px;height:80px;object-fit:contain"></td>
                            <td><input type="text" name="qty" class="form-input w-50"></td>
                            <?php
                            $ip = getIPAddress();
                            if(isset($_POST['update_cart'])){
                                $quantities = $_POST['qty'];
                                $update_cart = "UPDATE `cart_details` SET quantity='$quantities' WHERE ip_address='$ip'";
                                $result_product_qty = mysqli_query($conn, $update_cart);
                                $total_price = $total_price * $quantities;
                            }
                            ?>
                            <td><?php echo $table_price; ?>/-</td>
                            <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id; ?>"></td>
                            <td>
                            <!-- <a href="" type="submit" name="updateCart" value class="btn btn-info">Update</a> -->
                            <input type="submit" name="update_cart" value="Update Cart" class="btn btn-info">
                            <input type="submit" name="remove_cart" value="Remove" class="btn btn-danger">
                                
                            </td>
                        </tr>

                        <?php
                         }
    
                        }
                     }else{
                        echo '<h3 class="text-danger text-center">The card is Empty!</h3>';
                     }
                        ?>

                       
                        
                    </tbody>
                </table>
                <div class="d-flex p-3">
                  <?php
                  $ip = getIPAddress();
                 
                  $cart_price_query = "SELECT * FROM `cart_details` WHERE `ip_address`='$ip'";
                  $result = mysqli_query($conn, $cart_price_query);
                  $result_count = mysqli_num_rows($result);
                  if($result_count > 0){
                     echo ' <h4 class="px-3">Subtotal: <strong class="text-info">'. $total_price.'/-</strong></h4>
                     <input type="submit" name="continue_shopping" value="Continue Shopping" class="btn btn-info border-0 px-3 me-2">                     
                     <a href="checkout.php" class="btn btn-info border-0 px-3 ms-2">Checkout</a>';
                  }else{
                     echo '<input type="submit" name="continue_shopping" value="Continue Shopping" class="btn btn-info border-0 px-3 me-2">';
                  }

                  if(isset($_POST['continue_shopping'])){
                     echo '<script>window.open("index.php","_self")</script>';
                  }

                  ?>
                   
                </div>
            </div>
        </div>

        </form>
        <!-- function to remove itme -->
        <?php
            function remove_card_item(){
                global $conn;
                if(isset($_POST['remove_cart'])){
                    foreach($_POST['removeitem'] as $remove_id){
                        echo $remove_id;
                        $delete_query = "DELETE FROM `cart_details` WHERE product_id='$remove_id'";
                        $run_delete = mysqli_query($conn,$delete_query);
                        if($run_delete){
                            echo "<script>window.open('cart.php','_self')</script>";
                            
                        }
                    }
                }
            }
            echo $remove_items = remove_card_item();
        ?>


         <!-- display footer  -->
         <?php include('./includes/footer.php'); ?>
      </div>
      <!-- bootstrap js cdn link -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   </body>
</html>