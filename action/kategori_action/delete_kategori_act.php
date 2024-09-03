<?php 
include '../../connection/connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM kategori_produk WHERE id = $id";

if ($conn->query($sql) == true) {
    session_start();
    $_SESSION['msg'] = 'Delete Data Succces';
    header('Location:../../pages/kategori/index.php');
}else {
    session_start();
    $_SESSION['msg_err'] = 'Delete Data Failed';
    header('Location:../../pages/kategori/index.php');
}
?>