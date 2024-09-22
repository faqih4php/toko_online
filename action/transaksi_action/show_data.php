<?php 
include '../../connection/connection.php';

$sql = "SELECT transaksi.id, user.nama AS pembeli, produk.nama AS produk, pembayaran.nama AS pembayaran, jumlah_beli AS qty, tanggal_transaksi AS tgl, alamat, total_harga AS total, transaksi.status
FROM transaksi
JOIN user ON transaksi.user_id = user.id
JOIN produk ON transaksi.produk_id = produk.id
JOIN pembayaran ON transaksi.pembayaran_id = pembayaran.id
";

$result = mysqli_query($conn, $sql);

if ($result->num_rows < 0) {
    echo "Data Not Found";
}

?>