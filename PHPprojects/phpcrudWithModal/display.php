<?php
include('connection.php');

if(isset($_POST['displayData'])){
    $table = '<table class="table ">
    <thead style="background-color:black;color:white">
      <tr>
        <th scope="col">Si no</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Place</th>
        <th scope="col">Operation</th>
      </tr>
    </thead>';

    $number=1;
    $select ="SELECT * FROM `crud`";
    $result = mysqli_query($conn, $select);
    while($row=mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $place = $row['place'];

        $table.=' <tr>
        <td scope="row">'.$number.'</td>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$phone.'</td>
        <td>'.$place.'</td>
        <td>
            <button class="btn btn-primary" onclick="UpdateUser('.$id.')">Update</button>
            <button class="btn btn-danger" onclick="deleteUser('.$id.')">Delete</button>
        </td>
      </tr>';
      $number++;
    }

    $table .= '</table>';
    echo $table;
}


?>

