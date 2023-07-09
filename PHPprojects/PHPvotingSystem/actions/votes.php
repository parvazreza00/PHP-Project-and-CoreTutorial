<?php
session_start();

include('connection.php');

$votes = $_POST['groupvotes'];
$totalvotes = $votes+1;

$gid = $_POST['groupid'];
$uid = $_SESSION['id'];

$updatevotes = mysqli_query($conn, "UPDATE `userdata` SET votes='$totalvotes' WHERE id='$gid'");
$updatestatus = mysqli_query($conn, "UPDATE `userdata` SET status=1 WHERE id='$uid'");

if($updatevotes and $updatestatus){
    $getgroups = mysqli_query($conn, "SELECT name,photo,votes,id FROM `userdata` WHERE standard='group'");
    $groups = mysqli_fetch_all($getgroups, MYSQLI_ASSOC);
    $_SESSION['groups']=$groups;
    $_SESSION['status']=1;

    echo '<script>
    alert("Voting successfull");
    window.location="../partials/dashboard.php";
    </script>';
}else{
    echo '<script>
    alert("Technical Error!! Vote after sometime");
    window.location="../partials/dashboard.php";
    </script>';
}

?>