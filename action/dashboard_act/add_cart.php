<?php 
include '../../connection/connection.php';

session_start();
$user_id = $_SESSION['id'];
$produk_id = $_POST['id'];
$qty = $_POST['qty'];
$total_harga = intval($_POST['harga']) * intval($qty);

$insertData = "INSERT INTO keranjang VALUES(null, '$user_id', '$produk_id', '$qty', '$total_harga')";

$searchData = "SELECT * FROM keranjang WHERE produk_id = '$produk_id' and user_id = '$user_id'";
$check = $conn->query($searchData);

if ($check->num_rows > 0) {
    $data = mysqli_fetch_assoc($check);
    $newQty = $data['jumlah_beli'] + $qty;
    $newTotal = $data['total_harga'] + $total_harga;
    $updateData = "UPDATE keranjang SET jumlah_beli = $newQty, total_harga = $newTotal WHERE produk_id = '$produk_id' AND user_id = '$user_id'";
    $conn->query($updateData);
    if ($conn->query($updateData) == true) {
        header('location:../../pages/home/cart.php');
    }else {
        $_SESSION['msg_err'] = "Data Failed To Add";
    }
}else {
    $result = $conn->query($insertData);
    if ($result == true) {
        header('location:../../pages/home/cart.php');
    }else{
        $_SESSION['mag_err'] = "Data Failed To Add";
    }
}

?>