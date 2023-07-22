<?php
include('../includes/connection.php');

if(isset($_POST['product_insert'])){
    $product_title = $_POST['product_title'];
    $description = $_POST['description'];
    $keywords = $_POST['keywords'];
    $product_category = $_POST['product_category'];
    $product_brands = $_POST['product_brands'];
    $product_price = $_POST['product_price'];
    $product_status = 'true';

    // accessing image
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];
    // accessing image temp name
    $tmp_image1 = $_FILES['product_image1']['tmp_name'];
    $tmp_image2 = $_FILES['product_image2']['tmp_name'];
    $tmp_image3 = $_FILES['product_image3']['tmp_name'];
    
    // condition for field name is not empty
    if($product_title=='' or $description=='' or $keywords=='' or $product_category=='' or $product_brands=='' or $product_price=='' or $product_image1=='' or $product_image2=='' or $product_image3==''){
        echo "<script>alert('please, Fill all the available fields')</script>";
    }else{
        move_uploaded_file($tmp_image1,"./product_images/$product_image1");
        move_uploaded_file($tmp_image2,"./product_images/$product_image2");
        move_uploaded_file($tmp_image3,"./product_images/$product_image3");

        // inset product into db table 
        $insert_product = "INSERT INTO `products`(`product_title`, `product_des`, `product_keywords`, `category_id`, `brand_id`, `image_1`, `image_2`, `image_3`, `product_price`, `date`, `status`) VALUES ('$product_title','$description','$keywords','$product_category','$product_brands','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";

        $result_query = mysqli_query($conn, $insert_product);
        if($result_query){
            echo "<script>alert('Product Inserted Successfully')</script>";
        }else{
            echo "<script>alert('Product does not inserted')</script>";
        }


    }
}
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
      <title>Admin-Products</title>
</head>
<body class="bg-light">
    
    <div class="container mt-3">
        <h2 class="text-center">Insert Product</h2>
        <!-- form -->
        <form action="" method="POST" enctype="multipart/form-data">
            <!-- product Name -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off" required>
            </div>
            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Enter product description" autocomplete="off" required>
            </div>
             <!-- keywords -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="keywords" class="form-label">Product keywords</label>
                <input type="text" name="keywords" id="keywords" class="form-control" placeholder="Enter product keywords" autocomplete="off" required>
            </div>
             <!-- categories -->
             <div class="form-outline mb-4 w-50 m-auto">
             <label for="product_category" class="form-label">Product Category</label><br>
                <select name="product_category" id="product_category" class="form-select">
                <option value="">select a category</option>
                    <?php
                        $select_cat = "SELECT * FROM `categories`";
                        $result_cat = mysqli_query($conn, $select_cat);
                        while($row=mysqli_fetch_assoc($result_cat)){
                            $category_title = $row['category_titile'];
                            $category_id = $row['category_id'];
            echo "<option value='$category_id'>$category_title</option>";
                        }

                    ?>
                   
                   
                </select>
            </div>
            <!-- brands -->
            <div class="form-outline mb-4 w-50 m-auto">
             <label for="product_brands" class="form-label">Product Brands</label><br>
                <select name="product_brands" id="product_brands" class="form-select">
                    <option value="">select a brands</option>
                    <?php
                        $select_brand = "SELECT * FROM `brands`";
                        $result_brand = mysqli_query($conn, $select_brand);
                        while($row=mysqli_fetch_assoc($result_brand)){
                            $brand_title = $row['brand_title'];
                            $brand_id = $row['brand_id'];
            echo "<option value='$brand_id'>$brand_title</option>";
                        }

                    ?>
                   
                </select>
            </div>
            <!-- image 1 -->
            <div class="form-outline mb-4 w-50 m-auto">
             <label for="product_image1" class="form-label">Product Image 1</label>
             <input type="file" name="product_image1" id="product_image1" class="form-control" required>
            </div>
            <!-- image 2 -->
            <div class="form-outline mb-4 w-50 m-auto">
             <label for="product_image2" class="form-label">Product Image 2</label>
             <input type="file" name="product_image2" id="product_image2" class="form-control" required>
            </div>
            <!-- image 3 -->
            <div class="form-outline mb-4 w-50 m-auto">
             <label for="product_image3" class="form-label">Product Image 3</label>
             <input type="file" name="product_image3" id="product_image3" class="form-control" required>
            </div>
            <!-- price -->
            <div class="form-outline mb-4 w-50 m-auto">
             <label for="product_price" class="form-label">Product Price</label>
             <input type="text" name="product_price" id="product_price" class="form-control" required>
            </div>
             <!-- button -->
             <div class="form-outline mb-5 w-50 m-auto">            
             <input type="submit" name="product_insert" class="btn btn-info" value="Insert Product">
            </div>
        </form>

    </div>
    

    <!-- bootstrap js cdn link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>