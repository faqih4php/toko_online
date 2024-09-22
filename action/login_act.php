<?php 

include '../connection/connection.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username = '$username' and password = '$password'";

$result = $conn->query($sql);

if($result->num_rows > 0){
    $data = $result->fetch_assoc();
    if ($data['role'] == 1) {
        $_SESSION['id'] = $data['id'];
        $_SESSION['is_login'] = true;
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['role'] = $data['role'];
        echo "<script>alert('Login Success, Anda Sebagai Admin');</script>";
        echo header('location:../pages/layout/layout.php');
    }elseif ($data['role'] == 2) {
        $_SESSION['id'] = $data['id'];
        $_SESSION['is_login'] = true;
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['role'] = $data['role'];
        echo "<script>alert('Login Success, Anda Sebagai User');</script>";
        echo header('location:../pages/home/index.php');
    }
}else{

    $_SESSION['massage'] = "Username or Password is wrong";
    return header('location: ../pages/login_view.php');
}

?>