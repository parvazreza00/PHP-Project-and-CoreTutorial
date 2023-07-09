<?php

include('connection.php');

?>
<?php
if(isset($_GET['deleteId'])){
  $id = $_GET['deleteId'];

  $deleteUser = "DELETE FROM `crud` WHERE id='$id'";
  $sql = mysqli_query($conn, $deleteUser);
  if(!$sql){
          
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Ohh no Sorry! </strong>Your Data has not Deleted.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
  }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3">
      <a href="user.php" class="btn btn-success mb-3">Add User</a>

      <table class="table">
  <thead>
    <tr>
      <th scope="col">Si No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Password</th>
      <th scope="col" >Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
  $select = "SELECT * FROM crud";
  $result = mysqli_query($conn, $select);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
      $id = $row['id'];
      $name = $row['name'];
      $email = $row['email'];
      $phone = $row['phone'];
      $password = $row['password'];

      echo '<tr>
      <td>'.$id.'</td>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$phone.'</td>
      <td>'.$password.'</td>      
      <td>
        <a href="update.php?updateid='.$id.'" class="btn btn-primary">Update</a>
        <a href="crudshow.php?deleteId='.$id.'" class="btn btn-danger">Delete</a>
      </td>
      </tr>';
      
    }
  }

?>
    
    
  </tbody>
</table>




      
    </div>  



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>