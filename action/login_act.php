<?php 

include '../connection/connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username = '$username' and password = 'password'";

$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "<script>Alert('Login Succes');</script>";
    echo "<script>location.href = '../pages/dashboard_view.php';</script>";
}else{
    session_start();

    $_SESSION['massage'] = "Username or Password is wrong";
    return header('location: ../pages/login_view.php');
}

?>