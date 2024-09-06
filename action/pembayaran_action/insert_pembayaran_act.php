<?php 
include '../../connection/connection.php';
session_start();

$nama = $_POST['nama'];

$sql = "INSERT INTO pembayaran VALUES (null, '$nama')";

if ($conn->query($sql) == true) {
    $_SESSION['msg'] = 'Add Pembayaran Success';
    header('Location:../../pages/pembayaran/index.php');
}else{
    $_SESSION['msg_err'] = 'Add Pembayaran Failed';
    header('Location:../../pages/pembayaran/index.php');
}

?>