<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stories Website</title>
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- css link -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="slider">
        <?php include './partials/connection.php' ?>
        <?php include './partials/header.php' ?>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/img11.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/img10.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/img3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>

        <!-- cards here start -->
        <div class="container my-5">
            <h1 class="text-center featuredTitle mb-5">Featured Stories</h1>

            <div class="row">

            <?php
            $select = "SELECT * FROM `topics`";
            $result = mysqli_query($conn, $select);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $id = $row['topic_id'];
                    $topic_name = $row['topic_name'];
                    $topic_image = $row['topic_image'];
                    $topic_desc= $row['topic_desc'];

                    echo ' <div class="col-md-4 col-sm-6 mb-5">
                    <div class="card ms-2" style="width: 18rem;">
                        <img src="'.$topic_image.'" class="card-img-top" alt="..." style="width:300px;height:300px">
                        <div class="card-body">
                            <h5 class="card-title">'.$topic_name.'</h5>
                            <p class="card-text">'.substr($topic_desc,0,50).'.....</p>
                            <a href="stories.php?stories_id='.$id.'" class="btn btn-primary">Continue reading</a>
                        </div>
                    </div>
                </div>';
                }
            }
            ?>
 
            </div>
        </div>

        <?php include './partials/footer.php' ?>

    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>