

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name :<input type="text" name="name"><br>
        Phone :<input type="text" name="phone"><br>
        Email :<input type="email" name="email"><br>
        <button type="submit">submit</button>

    </form>

    <?php 
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        echo "Name : ".$name.'<br>';
        echo "Phone : ".$phone.'<br>';
        echo "Email : ".$email.'<br>';
    }

?>
</body>
</html>