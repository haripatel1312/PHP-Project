<?php
//login logic
    require 'Database.php';
    if (isset($_POST["submit"]))
 {
    $email = $_POST["loginEmail"];
    $password = $_POST["loginPassword"];
    $duplicate="SELECT *FROM phpadmins where email='$email' or pass = '$pass'";
    $result1=mysqli_query($conn,$duplicate);
    if (mysqli_num_rows($result1) > 0) 
    {
        header('location:display.php');
    } 
    else 
    {
        echo"Wrong email or password";
    }
}
?>

