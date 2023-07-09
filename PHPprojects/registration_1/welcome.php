<?php
include('connection.php');

session_start();
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 p-5 my-3 bg-warning">
                <h1>Welcome to
                    <?php echo $_SESSION['email']; ?>
                </h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur consectetur quas architecto! Delectus est tempora asperiores illum quas enim vitae quo minima repudiandae autem, reprehenderit atque tempore provident non praesentium eum distinctio placeat? Voluptate temporibus tenetur fuga suscipit eos eveniet provident iste adipisci amet tempore. Nobis delectus iste, voluptatum sed illum blanditiis magnam eveniet corrupti laboriosam nisi accusantium tempore autem aperiam quasi provident nulla, nam explicabo neque quaerat tempora amet possimus facere, libero quisquam. Libero atque, assumenda obcaecati, saepe rem fuga quasi repudiandae consectetur doloribus esse beatae, molestiae ducimus tempora laborum porro. Corporis tempora praesentium facilis placeat quae, optio incidunt.</p>
                <a href="logout.php" class="btn btn-primary mt-5" style="float:right">Logout</a>
            </div>
        </div>

    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>