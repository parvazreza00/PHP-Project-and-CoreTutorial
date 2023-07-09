<?php
$errors = array();
$file_name = $_FILES['image']['name'];
$file_tmp = $_FILES['image']['tmp_name'];
$file_size = $_FILES['image']['size'];
$file_type = $_FILES['image']['type'];
$file_exten = strtolower(end(explode('.',$file_name)));

$extensions = array("jpeg",'jpg','png');

if(in_array($file_exten,$extensions)===false){
    $array[] = "extension not allowed, please choose a JPEG or PNG file or jpg";
}
if($file_size > 2097152){
    $errors[] = "File size must be excately 2 MB";
}
if(empty($errors)==true){
    move_uploaded_file($file_tmp,"F:/uploads/".$file_name);
    echo "success";
}else{
    print_r($errors);
 }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        Image : <input type="file" name="image">
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>