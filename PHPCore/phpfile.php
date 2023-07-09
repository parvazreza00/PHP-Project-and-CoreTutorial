<?php

 if(isset($_POST['submit'])){
    $target_path = "F:/uploads/";
    $target_file = $target_path.basename($_FILES['uploadfile']['name']);
    $tmp_name = $_FILES['uploadfile']['tmp_name'];
    $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 
    $fileSize = $_FILES['uploadfile']['size'];

 if(file_exists($target_file)){
    echo "File already exists";
 }else{
    if($fileSize>500000){
        echo "Sorry! your file is so large";
    }else{
        if($fileType != "jpg" && $fileType != "jpeg" && $fileType != "png"){
            echo "Your file is not required extension";
        }else{
            if(move_uploaded_file($tmp_name, $target_file)){
                echo "File uploaded successfully";
            
             }else{
                echo "Sorry! Your file is not uploaded";
             }
        }
    }
 }

 

 

 
 }




?>

<form action="" method="post" enctype="multipart/form-data">
    Select File:
    <input type="file" name="uploadfile">
    <input type="submit" name="submit" value="FileUpload">
</form>