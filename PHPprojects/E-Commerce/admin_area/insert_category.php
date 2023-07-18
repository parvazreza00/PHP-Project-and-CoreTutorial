<?php
include('../includes/connection.php');

if(isset($_POST['insert_cat'])){
    $category = $_POST['cat_title'];

    $select_cat = "SELECT * FROM `categories` WHERE category_titile='$category'";    
    $result = mysqli_query($conn,$select_cat);

    if($result){
        $rows = mysqli_num_rows($result);
        if($rows>0){
            echo '<script>alert("Category already Inserted")</script>';
        }else{
        $insert_cat = "INSERT INTO `categories`(`category_titile`) VALUES ('$category')";
        $sql = mysqli_query($conn, $insert_cat);
        if($sql){
            // echo '<script>alert("Category inserted Successfully")</script>';
            header('location:../index.php');
        }else{
            echo '<script>alert("Category is Not inserted")</script>';
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
    
<h1 class="text-center">Insert Category</h1>
<form action="" method="post" mb-2>
    <div class="input-group w-90 mb-3">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert Category Name" aria-label="categories" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-3 m-auto">        
         <input type="submit" class="bg-info p-2 border-0" name="insert_cat" aria-label="Username" aria-describedby="basic-addon1" value="Insert Category"> 
        <!-- <button class="bg-info p-2 border-0">Insert Category</button> -->
    </div>
</form>


</body>
</html>


