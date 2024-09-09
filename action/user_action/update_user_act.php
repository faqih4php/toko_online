<?php 

    // koneksi
    include '../../connection/connection.php';
    // ambil data dari db
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    // query
    $sql = "UPDATE user SET nama='$name', email='$email', username='$username', password='$password', role=$role where id=$id";
    session_start();
    // jalankan query
    if($conn->query($sql) == true){
        $_SESSION['msg'] = 'Data Update Successfully';
        header('Location:../../pages/user/index.php');
    }else {
        $_SESSION['msg_err'] = 'Data Update Not Successfully';
        header('Location:../../pages/user/edit_user.php');
    }


    
    // respon apa dan kemana


?>