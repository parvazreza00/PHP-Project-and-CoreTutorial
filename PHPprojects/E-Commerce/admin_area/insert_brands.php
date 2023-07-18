<?php
include('../includes/connection.php');

if(isset($_POST['insert_brand'])){
    $brand_title = $_POST['brand_title'];

    $select_brand = "SELECT * FROM `brands` WHERE brand_title='$brand_title'";    
    $result = mysqli_query($conn,$select_brand);

    if($result){
        $rows = mysqli_num_rows($result);
        if($rows>0){
            echo '<script>alert("Brand already Inserted")</script>';
        }else{
        $insert_brand= "INSERT INTO `brands`(`brand_title`) VALUES ('$brand_title')";
        $sql = mysqli_query($conn, $insert_brand);
        if($sql){
            // echo '<script>alert("Category inserted Successfully")</script>';
            header('location:../index.php');
        }else{
            echo '<script>alert("Brand is Not inserted")</script>';
        }
    }
   
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>
    
<h1 class="text-center">Insert Brands</h1>
<form action="" method="post" mb-2>
    <div class="input-group w-90 mb-3">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="brand_title" placeholder="Insert Brands Name" aria-label="brands" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-3 m-auto">        
        <input type="submit" class="bg-info p-2 border-0" name="insert_brand" aria-label="Username" aria-describedby="basic-addon1" value="Insert Brand"> 
        <!-- <button class="bg-info p-2 border-0">Insert Brands</button> -->
    </div>
</form>

</body>
</html>