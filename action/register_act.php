<?php 
    // make create user to database
    include '../connection/connection.php';

    // get data from formnya
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // action for insert data to database
    $sql = "INSERT INTO user VALUES (null, '$nama', '$email', '$username', '$password')";

    if($conn->query($sql) == true){
        echo "<script>alert('Register Succes');</script>";
        echo "<script>location.href = '../pages/login_view.php';</script>";
    }else {
        echo "<script>alert('Register Failed');</script>";
        echo "<script>location.href = '../pages/register_view.php';</script>";
    }

?>