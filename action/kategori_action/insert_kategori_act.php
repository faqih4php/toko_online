<?php 
    include '../../connection/connection.php';

    $nama = $_POST['nama'];

    $sql = "INSERT INTO kategori_produk VALUES(null, '$nama')";

    if ($conn->query($sql) == true) {
        session_start();
        $_SESSION['msg'] = 'Add Categori Succes';
        header('Location:../../pages/kategori/index.php');
    }else{
        session_start();
        $_SESSION['msg_err'] = 'Add Categori Failed';
        header('Location:../../pages/kategori/add_kategori.php');
    }
?>