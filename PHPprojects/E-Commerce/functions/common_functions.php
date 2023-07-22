<?php

include('./includes/connection.php');      

// <!-- fetching product data on the user page -->
function getProducts(){
    global $conn;
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
    
    $select_product = "SELECT * FROM `products` ORDER BY rand() limit 0,9";
         $result_query = mysqli_query($conn, $select_product);
         while($row = mysqli_fetch_assoc($result_query)){
            $product_title = $row['product_title'];
            $product_des = $row['product_des'];
            $product_image1 = $row['image_1'];                  
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];
            $product_id = $row['product_id'];

                  echo '                  
                     <div class="col-md-4 mb-2">
                        <div class="card">
                           <img src="./admin_area/product_images/'.$product_image1.'" class="card-img-top" alt="'.$product_title.'">
                           <div class="card-body">
                              <h5 class="card-title">'.$product_title.'</h5>
                              <p class="card-text">'.$product_des.'</p>
                              <p class="card-text">Price:'.$product_price.' BDT</p>
                              <a href="index.php?add_to_cart='.$product_id.'" class="btn btn-primary">Add Product</a>
                              <a href="product_detail.php?product_id='.$product_id.'" class="btn btn-secondary">View More</a>
                           </div>
                        </div>
                     </div>';
               }

}
}

}

// <!-- fetching product data on the user page -->
function getAllProducts(){
   global $conn;
   if(!isset($_GET['category'])){
       if(!isset($_GET['brand'])){
   
   $select_product = "SELECT * FROM `products` ORDER BY rand()";
        $result_query = mysqli_query($conn, $select_product);
        while($row = mysqli_fetch_assoc($result_query)){
           $product_title = $row['product_title'];
           $product_des = $row['product_des'];
           $product_image1 = $row['image_1'];                  
           $product_price = $row['product_price'];
           $category_id = $row['category_id'];
           $brand_id = $row['brand_id'];
           $product_id = $row['product_id'];

                 echo '                  
                    <div class="col-md-4 mb-2">
                       <div class="card">
                          <img src="./admin_area/product_images/'.$product_image1.'" class="card-img-top" alt="'.$product_title.'">
                          <div class="card-body">
                             <h5 class="card-title">'.$product_title.'</h5>
                             <p class="card-text">'.$product_des.'</p>
                             <p class="card-text">Price:'.$product_price.' BDT</p>
                             <a href="index.php?add_to_cart='.$product_id.'" class="btn btn-primary">Add Product</a>
                             <a href="product_detail.php?product_id='.$product_id.'" class="btn btn-secondary">View More</a>
                          </div>
                       </div>
                    </div>';
              }

}
}

}

// getting unique categories
function get_unique_categories(){
    global $conn;
    if(isset($_GET['category'])){
        $cate_id =$_GET['category'];        
    
         $select_product = "SELECT * FROM `products` where `category_id`='$cate_id'";
         $result_query = mysqli_query($conn, $select_product);

         $num_of_rows = mysqli_num_rows($result_query);
         
         if($num_of_rows==0){
            echo '<marquee behavior="" direction="right"><h1 class="text-danger text-center">No stock for this Category</h1></marquee>';
         }else{
            while($row = mysqli_fetch_assoc($result_query)){
                $product_title = $row['product_title'];
                $product_des = $row['product_des'];
                $product_image1 = $row['image_1'];                  
                $product_price = $row['product_price'];
                $category_id = $row['category_id'];
                $brand_id = $row['brand_id'];
                $product_id = $row['product_id'];
    
                      echo '                  
                         <div class="col-md-4 mb-2">
                            <div class="card">
                               <img src="./admin_area/product_images/'.$product_image1.'" class="card-img-top" alt="'.$product_title.'">
                               <div class="card-body">
                                  <h5 class="card-title">'.$product_title.'</h5>
                                  <p class="card-text">'.$product_des.'</p>
                                  <p class="card-text">Price:'.$product_price.' BDT</p>
                                  <a href="index.php?add_to_cart='.$product_id.'" class="btn btn-primary">Add Product</a>
                                  <a href="product_detail.php?product_id='.$product_id.'" class="btn btn-secondary">View More</a>
                               </div>
                            </div>
                         </div>';
                   }
         }
         

}
}


// getting unique brands
function get_unique_brands(){
   global $conn;
   if(isset($_GET['brand'])){
       $brand_id =$_GET['brand'];        
   
        $select_product = "SELECT * FROM `products` where `brand_id`='$brand_id'";
        $result_query = mysqli_query($conn, $select_product);

        $num_of_rows = mysqli_num_rows($result_query);
        
        if($num_of_rows==0){
           echo '<marquee behavior="" direction="right"><h3 class="text-danger text-center">This brand is not available for service</h></marquee>';
        }else{
           while($row = mysqli_fetch_assoc($result_query)){
               $product_title = $row['product_title'];
               $product_des = $row['product_des'];
               $product_image1 = $row['image_1'];                  
               $product_price = $row['product_price'];
               $category_id = $row['category_id'];
               $brand_id = $row['brand_id'];
               $product_id = $row['product_id'];
   
                     echo '                  
                        <div class="col-md-4 mb-2">
                           <div class="card">
                              <img src="./admin_area/product_images/'.$product_image1.'" class="card-img-top" alt="'.$product_title.'">
                              <div class="card-body">
                                 <h5 class="card-title">'.$product_title.'</h5>
                                 <p class="card-text">'.$product_des.'</p>
                                 <p class="card-text">Price:'.$product_price.' BDT</p>
                                 <a href="index.php?add_to_cart='.$product_id.'" class="btn btn-primary">Add Product</a>
                                 <a href="product_detail.php?product_id='.$product_id.'" class="btn btn-secondary">View More</a>>
                              </div>
                           </div>
                        </div>';
                  }
        }
        

}
}


// displaying brands data 
function getBrands(){
    global $conn;

    $select_brand = "SELECT * FROM `brands`";
    $result_brand = mysqli_query($conn, $select_brand);
    while($row = mysqli_fetch_assoc($result_brand)){
     $brand_title = $row['brand_title'];
     $brand_id = $row['brand_id'];
     echo '<li class="nav-item ">
     <a href="index.php?brand='.$brand_id.'" class="nav-link text-light">'.$brand_title.'</a>
 </li>';
    }
}

// displaying category data
function getCategory(){
    global $conn;
    $select_cat = "SELECT * FROM `categories`";
    $result_cat = mysqli_query($conn, $select_cat);
    while($row = mysqli_fetch_assoc($result_cat)){
        $category_title = $row['category_titile'];
        $category_id = $row['category_id'];
        echo '<li class="nav-item ">
        <a href="index.php?category='.$category_id.'" class="nav-link text-light">'.$category_title.'</a>
    </li>';
    }
}

// serach product 
function  searchProduct(){
   global $conn;
   if(isset($_GET['search_data_product'])){
      $search_data = $_GET['search_data'];
    
    $search_product = "SELECT * FROM `products` WHERE `product_keywords` like '%$search_data%'";    
         $result_query = mysqli_query($conn, $search_product);
         $num_of_rows = mysqli_num_rows($result_query);
        
         if($num_of_rows==0){
            echo '<h3 class="text-danger text-center">No result match. This Product is not available for service.</h>';
         }
         while($row = mysqli_fetch_assoc($result_query)){
            $product_title = $row['product_title'];
            $product_des = $row['product_des'];
            $product_image1 = $row['image_1'];                  
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];
            $product_id = $row['product_id'];

                  echo '                  
                     <div class="col-md-4 mb-2">
                        <div class="card">
                           <img src="./admin_area/product_images/'.$product_image1.'" class="card-img-top" alt="'.$product_title.'">
                           <div class="card-body">
                              <h5 class="card-title">'.$product_title.'</h5>
                              <p class="card-text">'.$product_des.'</p>
                              <p class="card-text">Price:'.$product_price.' BDT</p>
                              <a href="index.php?add_to_cart='.$product_id.'" class="btn btn-primary">Add Product</a>
                              <a href="product_detail.php?product_id='.$product_id.'" class="btn btn-secondary">View More</a>
                           </div>
                        </div>
                     </div>';
               }

}
}

// view details of product
function viewProductDetails(){
   global $conn;
   if(isset($_GET['product_id'])){

    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
         $product_id = $_GET['product_id'];
    
    $select_product = "SELECT * FROM `products` WHERE `product_id`='$product_id'";
         $result_query = mysqli_query($conn, $select_product);
         while($row = mysqli_fetch_assoc($result_query)){
            $product_title = $row['product_title'];
            $product_des = $row['product_des'];
            $product_image1 = $row['image_1'];                  
            $product_image2 = $row['image_2'];                  
            $product_image3 = $row['image_3'];                  
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];
            $product_id = $row['product_id'];

                  echo '                  
                     <div class="col-md-4 mb-2">
                        <div class="card">
                           <img src="./admin_area/product_images/'.$product_image1.'" class="card-img-top" alt="'.$product_title.'">
                           <div class="card-body">
                              <h5 class="card-title">'.$product_title.'</h5>
                              <p class="card-text">'.$product_des.'</p>
                              <p class="card-text">Price:'.$product_price.' BDT</p>
                              <a href="index.php?add_to_cart='.$product_id.'" class="btn btn-primary">Add Product</a>
                              <a href="index.php" class="btn btn-secondary">Go Home</a>
                           </div>
                        </div>
                     </div>
                     
                     <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <h3 class="text-center text-info">Relate Products</h3>
                            </div>
                            <div class="col-md-6">
                            <img src="./admin_area/product_images/'.$product_image2.'" class="card-img-top" alt="'.$product_title.'">
                            </div>
                            <div class="col-md-6">
                            <img src="./admin_area/product_images/'.$product_image3.'" class="card-img-top" alt="'.$product_title.'">
                            </div>
                        </div>
                    </div>';
               }

}
}
}
}

// getting ip address 
function getIPAddress() {  
   //whether ip is from the share internet  
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
               $ip = $_SERVER['HTTP_CLIENT_IP'];  
       }  
   //whether ip is from the proxy  
   elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
               $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    }  
//whether ip is from the remote address  
   else{  
            $ip = $_SERVER['REMOTE_ADDR'];  
    }  
    return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  

// add to cart
function cart(){
   if(isset($_GET['add_to_cart'])){
      global $conn;

      $ip = getIPAddress();
      $get_product_id = $_GET['add_to_cart'];
      $select_query = "SELECT * FROM `cart_details` WHERE `ip_address`='$ip' and `product_id`='$get_product_id'";
      $result_query = mysqli_query($conn, $select_query);
      $num_of_rows = mysqli_num_rows($result_query);        
         if($num_of_rows>0){
            echo '<script>alert("This item is already inside in cart!")</script>';
            echo '<script>window.open("index.php","_self")</script>';
         }else{
            $insert_query = "INSERT INTO `cart_details`(`product_id`, `ip_address`, `quantity`) VALUES ($get_product_id,'$ip',0)";
            $result_query = mysqli_query($conn, $insert_query);
            echo '<script>alert("This item is added to cart!")</script>';
            echo '<script>window.open("index.php","_self")</script>';
         }
   }
}

// get cart item number
function cart_item_count(){
   if(isset($_GET['add_to_cart'])){
      global $conn;
      $ip = getIPAddress();     
      $select_query = "SELECT * FROM `cart_details` WHERE `ip_address`='$ip'";
      $result_query = mysqli_query($conn, $select_query);
      $count_cart_item = mysqli_num_rows($result_query);

         }else{
            global $conn;
            $ip = getIPAddress();     
            $select_query = "SELECT * FROM `cart_details` WHERE `ip_address`='$ip'";
            $result_query = mysqli_query($conn, $select_query);
            $count_cart_item = mysqli_num_rows($result_query);
         }
         echo $count_cart_item;
   }

//  total cart price 
function totalCartPrice(){
   global $conn;
   $ip = getIPAddress();
   $total_price = 0;
   $cart_price_query = "SELECT * FROM `cart_details` WHERE `ip_address`='$ip'";
   $result = mysqli_query($conn, $cart_price_query);
   while($row = mysqli_fetch_array($result)){
      $product_id = $row['product_id'];
      $select_products = "SELECT * FROM `products` WHERE `product_id`='$product_id'";
      $result_products = mysqli_query($conn, $select_products);
      while($row_product_price = mysqli_fetch_array($result_products)){
         $product_price = array($row_product_price['product_price']);
         $product_values = array_sum($product_price);
         $total_price += $product_values;

      }

   }
   echo $total_price;

}



?>
