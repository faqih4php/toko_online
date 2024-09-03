<?php 

    // koneksi
    include '../../connection/connection.php';
    // ambil data dari db
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    // query
    $sql = "UPDATE user SET nama='$name', email='$email', username='$username', password='$password' where id=$id";
    
    // jalankan query
    if($conn->query($sql) == true){
        echo "<script>alert('Update Succes');</script>";
        echo "<script>location.href = '../../pages/user/index.php';</script>";
    }else {
        echo "<script>alert('Update Failed');</script>";
        echo "<script>location.href = '../../pages/user/edit_user.php';</script>";
    }


    
    // respon apa dan kemana


?>