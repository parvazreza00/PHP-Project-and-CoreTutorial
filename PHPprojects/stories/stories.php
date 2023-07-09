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

    
    
    
        <?php include './partials/connection.php' ?>
        <?php include './partials/header.php' ?>

        <?php
        $id = $_GET['stories_id'];
        $select = "SELECT * FROM `topics` WHERE topic_id='$id'";
        $result = mysqli_query($conn, $select);
        while($row = mysqli_fetch_assoc($result)){
            $topic_name = $row['topic_name'];
            $topic_image = $row['topic_image'];
            $topic_desc= $row['topic_desc'];
        }
    
        ?>

        <div class="container-fluid">
            <div class="bg-warning p-5 rounded-lg m-3 ">
                <div class="container">
                    <h1 class="display-4"><?php echo $topic_name; ?></h1>
                    <p class="lead"><?php echo $topic_desc; ?></p>
                    <hr class="my-4">
                    
                    <button class="btn btn-dark"><a class="text-light text-decoration-none" href="#reading" role="button">Learn more</a></button>
                </div>
            </div>
        </div>
        <div class="slider">
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
    </div>


    <div class="container py-3" id="reading">
            <div class="bg-warning p-3 rounded-lg m-3 ">
                <div class="container">
                    <h1 class="display-4 text-center"><b>Enjoy Reading!</b></h1>
                    <img src="<?php echo $topic_image; ?>" class="img-fluid" alt="">
                    <p class="lead mt-3">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, facilis. Quis vero dolorum iure beatae molestiae quas quasi quidem aut. Accusantium incidunt eius consequatur nostrum impedit necessitatibus repellendus sequi error.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, facilis. Quis vero dolorum iure beatae molestiae quas quasi quidem aut. Accusantium incidunt eius consequatur nostrum impedit necessitatibus repellendus sequi error.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, facilis. Quis vero dolorum iure beatae molestiae quas quasi quidem aut. Accusantium incidunt eius consequatur nostrum impedit necessitatibus repellendus sequi error.This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, facilis. Quis vero dolorum iure beatae molestiae quas quasi quidem aut. Accusantium incidunt eius consequatur nostrum impedit necessitatibus repellendus sequi error.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, facilis. Quis vero dolorum iure beatae molestiae quas quasi quidem aut. Accusantium incidunt eius consequatur nostrum impedit necessitatibus repellendus sequi error.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, facilis. Quis vero dolorum iure beatae molestiae quas quasi quidem aut. Accusantium incidunt eius consequatur nostrum impedit necessitatibus repellendus sequi error.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, facilis. Quis vero dolorum iure beatae molestiae quas quasi quidem aut. Accusantium incidunt eius consequatur nostrum impedit necessitatibus repellendus sequi error.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, facilis. Quis vero dolorum iure beatae molestiae quas quasi quidem aut. Accusantium incidunt eius consequatur nostrum impedit necessitatibus repellendus sequi error.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, facilis. Quis vero dolorum iure beatae molestiae quas quasi quidem aut. Accusantium incidunt eius consequatur nostrum impedit necessitatibus repellendus sequi error.This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, facilis. Quis vero dolorum iure beatae molestiae quas quasi quidem aut. Accusantium incidunt eius consequatur nostrum impedit necessitatibus repellendus sequi error.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, facilis. Quis vero dolorum iure beatae molestiae quas quasi quidem aut. Accusantium incidunt eius consequatur nostrum impedit necessitatibus repellendus sequi error.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, facilis. Quis vero dolorum iure beatae molestiae quas quasi quidem aut. Accusantium incidunt eius consequatur nostrum impedit necessitatibus repellendus sequi error.</p>
                </div>
            </div>
        </div>

        <!-- thank you text -->
        <div class="container-fluid mb-4">
            <h4 class="text-center display-4">Thank You For Your Time 
                <span class="text-danger">&hearts; </span></h4>
        </div>


    <?php include './partials/footer.php' ?>
</body>

</html>