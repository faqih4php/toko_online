<?php 
include '../../connection/connection.php';
session_start();

$id = $_POST['id'];
$nama = $_POST['nama'];

$sql = "UPDATE pembayaran SET nama = '$nama' WHERE id = $id";

if ($conn->query($sql) == true) {
    $_SESSION['msg'] = 'Data Updated Successfully';
    header('Location:../../pages/pembayaran/index.php');
}else{
    $_SESSION['msg_err'] = 'Data Wasnt Updated Successfully';
    header('Location:../../pages/pembayaran/index.php');
}

?>