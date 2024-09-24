<?php 
include '../../connection/connection.php';

session_start();
$user_id = $_SESSION['id'];
$produk_id = $_POST['id'];
$qty = $_POST['qty'];
$total_harga = intval($_POST['harga']) * intval($qty);

$sql = "INSERT INTO keranjang VALUES(null, '$user_id', '$produk_id', '$qty', '$total_harga')";
$result = $conn->query($sql);

if ($result == true) {
    header('location:../../pages/home/cart.php');
}else{
    $_SESSION['mag_err'] = "Data Failed To Add";
}
?>