<?php 
include '../../connection/connection.php';

session_start();
$id = $_GET['id'];

$sql = "DELETE FROM pembayaran WHERE id = $id";

if ($conn->query($sql) == true) {
    $_SESSION ['msg'] = 'Delete Data Succes';
    header('Location:../../pages/pembayaran/index.php');
}else {
    $_SESSION ['msg_err'] = 'Delete Data Failed';
    header('Location:../../pages/pembayaran/index.php');
}

?>