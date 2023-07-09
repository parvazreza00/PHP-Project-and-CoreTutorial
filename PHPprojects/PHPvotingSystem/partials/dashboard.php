<?php

session_start();
if(!isset($_SESSION['id'])){
    header('location:../index.php');
}


if(isset($_SESSION['data'])){
    $data = $_SESSION['data'];
    

if($_SESSION['status']==1){
    $status = '<b class="text-info">Voted</b>';
}else{
    $status = '<b class="text-light">Not voted</b>';
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Voting System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>
</head>
<body class="bg-secondary text-light">
    <div class="container py-5">
        <a href="../index.php"><button class="btn btn-dark text-light px-3">Back</button></a>
        <a href="logout.php"><button class="btn btn-dark text-light px-2">Logout</button></a>
        <h1 class="my-3">Voting System</h1>
        <div class="row my-5">
            <div class="col-md-7">
                <!-- groups -->
                <?php
                if(isset($_SESSION['groups'])){
                    $groups = $_SESSION['groups'];
                    for($i=0;$i<count($groups);$i++){
                        ?>
                        <div class="row">
                    <div class="col-md-4">
                        <img src="../uploads/<?php echo $groups[$i]['photo']?>" alt="GroupImage" style="width:80px;height:90px;object-fit:contain">
                    </div>
                    <div class="col-md-8">
                        <strong class="text-dark h5">Group Name:</strong>
                        <?php echo $groups[$i]['name']?><br>
                        <strong class="text-dark h5">Votes:</strong><?php echo $groups[$i]['votes']?><br>
                    </div>
                </div>
                <form action="../actions/votes.php" method="post">
                    <input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes']; ?>">
                    <input type="hidden" name="groupid" value="<?php echo $groups[$i]['id']; ?>" >
                

                <?php
                    if($_SESSION['status']==1){
                        ?>
                        <button class="btn btn-success my-3">Voted</button>

                        <?php
                    }else{
                        ?>
                        <button class="btn btn-danger my-3" type="submit">Vote</button>
                        <?php
                    }
                ?>
                </form>
                <hr style="border: 1px solid white;">
                <?php
                    }
                }else{
                    ?>
                    <div class="container">
                        <h4>No groups to display</h4>
                    </div>

                    <?php
                }
                ?>
                
            </div>
            
            <div class="col-md-5">
                <!-- voters profile-->
                <img src="../uploads/<?php echo $data['photo']; ?>" alt="UserImage" style="width:80px;height:90px;object-fit:contain">
                <br>
                <br>
                <strong class="text-dark h5">Voter Name: </strong><?php echo $data['name'];?><br><br>
                <strong class="text-dark h5">Voter Mobile:</strong> <?php echo $data['mobile'];?><br><br>
                <strong class="text-dark h5">Voter Status:</strong> <?php echo $status; ?><br><br>


            </div>
        </div>
    </div>
</body>
</html>