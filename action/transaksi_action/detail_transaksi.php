<?php 
include '../../connection/connection.php';

$id = $_POST['id'];

$sql = "SELECT transaksi.id, user.nama AS pembeli, produk.nama AS produk, pembayaran.nama AS pembayaran,
jumlah_beli AS qty, tanggal_transaksi, alamat, total_harga, transaksi.`status`, produk.foto_produk AS foto_produk
FROM transaksi
JOIN user ON transaksi.user_id = user.id
JOIN produk ON transaksi.produk_id = produk.id
JOIN pembayaran ON transaksi.pembayaran_id = pembayaran.id
where transaksi.id = $id";

$result = $conn->query($sql);

if($result->num_rows > 0 ){
    $data = $result->fetch_assoc();
    echo json_encode($data);
}
?>