<?php 
    include '../../connection/connection.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM user WHERE id = $id";

    if($conn->query($sql) === TRUE){
        session_start(); 
        $_SESSION['msg'] = 'Delete User Succes';
        header('Location:../../pages/user/index.php');
    }else{
        session_start();
        $_SESSION['msg_err'] = 'Delete User Failed';
        header('Location:../../pages/user/index.php');
    }
?>