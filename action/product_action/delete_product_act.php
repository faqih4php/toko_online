<?php 
include '../../connection/connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM produk WHERE id = $id";

if ($conn->query($sql) == true) {
    session_start();
    $_SESSION['msg'] = 'Delete Produk Success';
    header('Location:../../pages/product/index.php');
}else {
    session_start();
    $_SESSION['msg_err'] = 'Delete Produk Failed';
    header('Location:../../pages/product/index.php');
}
?>