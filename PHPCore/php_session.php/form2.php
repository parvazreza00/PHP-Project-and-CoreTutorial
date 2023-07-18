<?php
session_start();

$_SESSION['name'] = $_POST['user_name'];
$_SESSION['email_address'] = $_POST['user_email_address'];
$_SESSION['mobile_number'] = $_POST['number'];

?>

<form action="form3.php" method="post">
    <label for="">Company :</label>
    <input type="text" name="company"><br><br>
    <label for="">City : </label>
    <input type="text" name="city"><br><br>
    <label for="">State : </label>
    <input type="text" name="state"><br><br>
    <label for="">You are a: </label>
    <input type="radio" name="profession" value="Student">Student
    <input type="radio" name="profession" value="Working Professional
    ">Working Professional
    <br><br>
    <label for="">Course : </label>
    <select name="course" id="">
        <option value="" selected="" disabled="">select any one</option>
        <option value="DSnA">Data Structure and Algorithm</option>
        <option value="Gate_test">GATE Mock Test</option>
        <option value="Mock_interview">Mock Interviews</option>
        <option value="Machine_learning">Machine Learning</option>
    </select><br><br>
    <label for=""><input type="checkbox" name="terms_and_condition">Terms and conditions</label><br><br>
    <label for=""><input type="submit" value="Register"></label>
</form>